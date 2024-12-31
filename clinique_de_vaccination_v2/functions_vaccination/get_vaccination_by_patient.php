<?php
include '../conexion.php';

function getVaccinationByPatient($id_patient)
{
    $pdo = getPDOconexion();
    $sql = "SELECT p.nom AS patient_name, v.nom AS vaccin_name, vac.date_vaccination
            FROM patient p
            JOIN vaccination vac ON p.id = vac.id_patient
            JOIN vaccin v ON vac.id_vaccin = v.id
            WHERE p.id = :id_patient";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_patient' => $id_patient]);
    return $stmt->fetchAll();
}