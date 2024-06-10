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

function getCompteById($id) {
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('SELECT comptes.ID, NumeroCompte, Solde, Nom, Prenom, Mail, Telephone 
                                FROM comptes 
                                INNER JOIN clients on clients.ID = FK_Client
                                WHERE comptes.ID = ?;');                           
    $request->execute([$id]);
    return $request->fetch(PDO::FETCH_ASSOC);
}


// Crée une fonction pour récuperer le compte par son id avec les infos du client (JOINTURE)