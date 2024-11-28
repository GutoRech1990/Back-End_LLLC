<?php
// products/delete.php
require_once __DIR__ . '/../config/database.php';

try {
    if (!isset($_GET['id'])) {
        header('Location: ../index.php');
        exit;
    }
    $pdo = getPDOConnection();
    $sql = "DELETE FROM produits WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute(['id' => $_GET['id']])) {
        header('Location: ../index.php');
    } else {
        throw new Exception("Erreur lors de la suppression");
    }
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}