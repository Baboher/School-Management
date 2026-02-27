<?php

    $server = "127.0.0.1"; // Hôte de la base de données
    $username = "root";        // Nom d'utilisateur de la base de données
    $password = "";            // Mot de passe de la base de données
    $dbname = "school management";    // Nom de la base de données

    $connexion = new PDO("mysql:host=$server;dbname=$dbname;charset=UTF8","$username","$password");

?>