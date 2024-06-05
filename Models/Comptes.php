<?php

require_once("BDD.php");

//crée la function fetchCompte qui sera appelé dans Comptecontroller.php

function fetchComptes() {
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('SELECT ID, NumeroCompte, Solde, FK_Clients FROM comptes;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
 }
 function insertComptes($ID, $NumeroCompte, $Solde, $FK_Clients){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('INSERT INTO comptes (ID, NumeroCompte, Solde, FK_Clients) VALUES (?,?,?,?);');
    $request->execute([$ID, $NumeroCompte, $Solde, $FK_Clients]);
}