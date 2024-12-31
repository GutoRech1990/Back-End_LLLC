<?php
include 'conexion.php';

function deleteVaccination($id)
{
    $pdo = getPDOconexion();
    $sql = "DELETE FROM vaccination WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
}