<?php
include 'conexion.php';

function getVaccins()
{
    $pdo = getPDOconexion();
    $sql = "SELECT * FROM vaccin";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}