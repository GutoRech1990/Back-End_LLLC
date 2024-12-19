<?php
function obtenirConnexionPDO()
{
    try {
        $dsn = 'mysql:host=localhost;dbname=gestion_inscriptions;charset=utf8';
        $utilisateur = 'root';
        $motDePasse = ''; // Remplacez par votre mot de passe si nécessaire
        return new PDO($dsn, $utilisateur, $motDePasse, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $e) {
        die('Erreur de connexion : ' . $e->getMessage());
    }
}