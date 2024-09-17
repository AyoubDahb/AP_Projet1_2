<?php

    try {
        $url = "mysql:host=localhost:3306;dbname=clientleger";
        $user = "root";
        $mdp = "root";
        $bdd = new PDO($url, $user, $mdp);
    } catch (PDOException $e) {
        print "Erreur de connexion a la BDD: " . $e->getMessage() . "<br/>";
        die();
    }

?>