<?php
include 'conexion.php';

function getVaccinations()
{
    $pdo = getPDOconexion();
    $sql = "SELECT * FROM vaccination";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}