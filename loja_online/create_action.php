<?php
require 'config.php';

$nom = filter_input(INPUT_POST, 'nom');
$description = filter_input(INPUT_POST, 'description');
$prix = filter_input(INPUT_POST, 'prix');
$stock = filter_input(INPUT_POST, 'stock');

if ($nom && $description && $prix && $stock) {
    $sql = $pdo->prepare("INSERT INTO produits (nom, description, prix, stock) VALUES (:nom, :description, :prix, :stock)");
    $sql->bindValue(':nom', $nom);
    $sql->bindValue(':description', $description);
    $sql->bindValue(':prix', $prix);
    $sql->bindValue(':stock', $stock);
    $sql->execute();

    header("Location: index.php");
    exit;
} else {
    header("Location: cadastrar.php");
    exit;
}
