<?php

// Importer la configuration database
require_once __DIR__ . "/../config/database.php";

// Function qui retourne un seul produit pour un ID donnée
function getProductById($id)
{
    try {
        $pdo = getPDOConnection();
        $query = "SELECT * FROM produits WHERE id= $id";
        $stmt = $pdo->query($query);
        return $stmt->fetch();
    } catch (PDOException $e) {
        die("Erreur lors de la recuparation du produit " . $e->getMessage());
    }
}

// $produit = getProductById(4);
// var_dump($produit);
