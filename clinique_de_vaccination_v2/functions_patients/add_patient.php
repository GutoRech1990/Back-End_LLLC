<?php
include '../conexion.php';

function addPatient($nom, $age, $adresse, $date_naissance)
{
    $pdo = getPDOconexion();
    $sql = "INSERT INTO patient (nom, age, adresse, date_naissance) VALUES (:nom, :age, :adresse, :date_naissance)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nom' => $nom, 'age' => $age, 'adresse' => $adresse, 'date_naissance' => $date_naissance]);
    return $pdo->lastInsertId();
}