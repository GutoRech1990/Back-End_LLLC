<?php
include 'conexion.php';

function getPatientById($id)
{
    $pdo = getPDOconexion();
    $sql = "SELECT * FROM patient WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
}