<?php
include 'conexion.php';

function editVaccin($id, $nom, $fournisseur, $fabricant, $prix)
{
    $pdo = getPDOconexion();
    $sql = "UPDATE vaccin SET nom = :nom, fournisseur = :fournisseur, fabricant = :fabricant, prix = :prix WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id, 'nom' => $nom, 'fournisseur' => $fournisseur, 'fabricant' => $fabricant, 'prix' => $prix]);
}