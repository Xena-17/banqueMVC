<?php

require_once '../Models/Comptes.php';

if (!isset($_GET['action'])) {
    $comptes = fetchComptes();
    include '../Views/comptes/index.php';
}
else
{
    if ($_GET['action']=="create") {
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
}