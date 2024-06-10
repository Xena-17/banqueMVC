<?php

require_once("BDD.php");

//crée la function fetchCompte qui sera appelé dans Comptecontroller.php

function fetchComptes() {
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('SELECT ID, NumeroCompte, Solde, FK_Client FROM comptes;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
 }
 function insertComptes ($NumeroCompte, $Solde, $FK_Client){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('INSERT INTO comptes (NumeroCompte, Solde, FK_Client) VALUES (?,?,?);');
    $request->execute([$NumeroCompte, $Solde, $FK_Client]);
}