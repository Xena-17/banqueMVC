<?php

class BDD {
    function connect(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=banque','root','');
            return $pdo;
        } 
        catch (PDOException $e) {
           echo 'Une erreur est survenue' . $e->getMessage();
        }
    }

}