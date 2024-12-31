<?php
include '../conexion.php';

function getPatients()
{
    $pdo = getPDOconexion();
    $sql = "SELECT * FROM patient";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}