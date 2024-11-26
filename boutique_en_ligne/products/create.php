<?php

// Importer la configuration database
require_once __DIR__ . "/../config/database.php";

function createProduct($data)
{
    try {
        $pdo = getPDOConnection();
        $query = "INSERT INTO produits (nom, description, prix, stock) VALUES (:nom, :description, :prix, :stock)";
        $stmt = $pdo->prepare($query);
        return $stmt->execute([
            "nom" => $data['nom'],
            "description" => $data['description'],
            "prix" => $data['prix'],
            "stock" => $data['stock']
        ]);
    } catch (PDOException $e) {
        die("Erreur lors de la création d'un produit" . $e->getMessage());
    }
}
