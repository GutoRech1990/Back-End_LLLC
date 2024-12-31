<?php
if (!function_exists('getPDOconexion')) {
    function getPDOconexion()
    {
        try {
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $db = 'clinique_de_vaccination';
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];
            return new PDO("mysql:host=$host;dbname=$db", $user, $password, $options);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}