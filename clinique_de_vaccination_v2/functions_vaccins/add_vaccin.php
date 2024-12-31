<?php
include 'conexion.php';

function addVaccin($nom, $fournisseur, $fabricant, $prix)
{
    $pdo = getPDOconexion();
    $sql = "INSERT INTO vaccin (nom, fournisseur, fabricant, prix) VALUES (:nom, :fournisseur, :fabricant, :prix)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nom' => $nom, 'fournisseur' => $fournisseur, 'fabricant' => $fabricant, 'prix' => $prix]);
    return $pdo->lastInsertId();
}