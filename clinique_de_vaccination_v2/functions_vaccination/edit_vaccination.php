<?php
include 'conexion.php';

function editVaccination($id, $id_patient, $id_vaccin, $date_vaccination)
{
    $pdo = getPDOconexion();
    $sql = "UPDATE vaccination SET id_patient = :id_patient, id_vaccin = :id_vaccin, date_vaccination = :date_vaccination WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id, 'id_patient' => $id_patient, 'id_vaccin' => $id_vaccin, 'date_vaccination' => $date_vaccination]);
}