<?php
include_once '../functions_vaccination/get_vaccination_by_patient.php';

$id_patient = $_GET['id_patient'];

$vaccination = getVaccinationByPatient($id_patient);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information</title>
</head>

<body>
    <h2>Patient</h2>
    <?php if (!empty($vaccination)) : ?>
    <p>Name: <?= $vaccination[0]['patient_name'] ?></p>
    <hr>
    <h2>Vaccins</h2>
    <table>
        <thead>
            <tr>
                <th>Vaccin</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vaccination as $vaccin) : ?>
            <tr>
                <td><?= $vaccin['vaccin_name'] ?></td>
                <td><?= $vaccin['date_vaccination'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else : ?>
    <p>No vaccination records found for this patient.</p>
    <?php endif; ?>
</body>

</html>