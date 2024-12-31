<?php
include_once '../functions_patients/get_patients.php';

$patients = getPatients();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div class="container text-center w-75 h-75 rounded-3 p-3 border-glow bg-light">
        <h1>Patients</h1> <br>
        <a href="../index.php" class="btn btn-secondary">Back</a>
        <hr>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patients as $patient) : ?>
                <tr>
                    <th scope="row"><?= $patient['id'] ?></th>
                    <td><?= $patient['nom'] ?></td>
                    <td><?= $patient['age'] ?></td>
                    <td><?= $patient['adresse'] ?></td>
                    <td><?= $patient['date_naissance'] ?></td>
                    <td>
                        <a href="info_patient.php?id=<?= $patient['id'] ?>" class="btn btn-warning btn-sm">Info</a>
                        <a href="vaccination_action.php?id=<?= $patient['id'] ?>"
                            class="btn btn-info btn-sm">Vaccination</a>
                        <a href="delete_patient_action.php?id=<?= $patient['id'] ?>"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>