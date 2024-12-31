<?php
include 'conexion.php';

function registerVaccination($id_patient, $id_vaccin, $date_vaccination)
{
    $pdo = getPDOconexion();
    $sql = "INSERT INTO vaccination (id_patient, id_vaccin, date_vaccination) VALUES (:id_patient, :id_vaccin, :date_vaccination)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_patient' => $id_patient, 'id_vaccin' => $id_vaccin, 'date_vaccination' => $date_vaccination]);
}