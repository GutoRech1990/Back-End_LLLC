<?php

// Importer la configuration database
require_once __DIR__ . "/../config/database.php";

// Function qui retourne tous les produits dans la database
function getAllProducts()
{
    try {
        $pdo = getPDOConnection();
        $query = "SELECT * FROM produits ORDER BY nom ASC";
        $stmt = $pdo->query($query);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        die("Erreur lors de la recuparation des produits " . $e->getMessage());
    }
}

// Exemple d'utilisation:
// $products = getAllProducts();

// echo "<pre>";
// var_dump($products);
// echo "</pre>";