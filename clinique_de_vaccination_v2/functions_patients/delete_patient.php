<?php
include 'conexion.php';

function deletePatient($id)
{
    $pdo = getPDOconexion();
    $sql = "DELETE FROM patient WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
}