<?php

require_once '../Models/Comptes.php';
require_once '../Models/Client.php';

if (!isset($_GET['action'])) {
    $comptes = fetchComptes();
    include '../Views/comptes/index.php';
}
else
{
    if ($_GET['action']=="create") {
        $clients =fetchClients();
        include '../Views/comptes/create.php';
    }
    if ($_GET['action']== 'insert'){

        var_dump($_POST);
        $NumeroCompte = $_POST['NumeroCompte'];
        $Solde=$_POST['Solde'];
        $FK_Client=$_POST['FK_Client'];
        insertComptes($NumeroCompte,$Solde,$FK_Client);
        header('Location: CompteController.php');
        }
    if ($_GET['action']=='details'){        
        $id = $_GET['id']; 
        $compte = getCompteByID($id);
        include '../Views/comptes/details.php';
        }
}

 // ajouter une condition $_GET['action'] == details
    // Récuperer l'id du compte 
    // afficher les infos du compte et du client associer a celui ci
    // Faire un includes de la page comptes/details.php
