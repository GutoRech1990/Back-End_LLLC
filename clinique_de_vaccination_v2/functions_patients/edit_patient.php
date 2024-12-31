<?php
include 'conexion.php';

function editPatient($id, $nom, $age, $adresse, $date_naissance)
{
    $pdo = getPDOconexion();
    $sql = "UPDATE patient SET nom = :nom, age = :age, adresse = :adresse, date_naissance = :date_naissance WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id, 'nom' => $nom, 'age' => $age, 'adresse' => $adresse, 'date_naissance' => $date_naissance]);
}