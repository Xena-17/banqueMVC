<?php

require_once 'BDD.php';


function fetchClients() {
   $bdd = new BDD();
   $conn = $bdd->connect();
   $request = $conn->prepare('SELECT ID, Nom, Prenom, Mail, Telephone FROM clients;');
   $request->execute();
   return $request->fetchAll(PDO::FETCH_ASSOC);
}