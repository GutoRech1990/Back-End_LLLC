<?php

// definir des constantes / infos connection DB
define("DB_HOST", "localhost");
define("DB_NAME", "boutique_en_ligne");
define("DB_USER", "root");
define("DB_PASS", "");


// Function de connexion DB en utilisant PDO
function getPDOConnection()
{
    try {
        $con = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";";
        $options = [
            PDO::ATTR_EMULATE_PREPARES => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        return new PDO($con, DB_USER, DB_PASS, $options);
    } catch (PDOException $e) {
        die("Erreur de connexion: " . $e->getMessage());
    }
}
