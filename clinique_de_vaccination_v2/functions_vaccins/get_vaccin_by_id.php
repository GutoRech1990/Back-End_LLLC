<?php
include 'conexion.php';

function getVaccinById($id)
{
    $pdo = getPDOconexion();
    $sql = "SELECT * FROM vaccin WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
}