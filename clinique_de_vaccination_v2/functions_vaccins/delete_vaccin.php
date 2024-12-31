<?php
include 'conexion.php';

function deleteVaccin($id)
{
    $pdo = getPDOconexion();
    $sql = "DELETE FROM vaccin WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
}