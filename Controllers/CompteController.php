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
        $ID = $_POST['ID'];
        $NumeroCompte = $_POST['NumeroCompte'];
        $Solde=$_POST['Solde'];
        $FK_Clients=$_POST['FK_Clients'];
        insertClient($ID,$NumeroCompte,$Solde,$FK_Clients);
        header('Location: CompteController.php');
        }
}