<?php
include_once '../functions_patients/add_patient.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $adresse = $_POST['adresse'];
    $date_naissance = $_POST['date_naissance'];

    addPatient($nom, $age, $adresse, $date_naissance);
    header('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>


<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="container text-center w-75 h-75 rounded-3 p-3 border-glow bg-light">
        <h1>New Patient</h1> <br>
        <a href="../index.php" class="btn btn-secondary">Back</a>
        <hr>
        <form method="POST">
            <div class="mb-3 w-50 mx-auto">
                <label for="nom" class="form-label">Name</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="adresse" class="form-label">Address</label>
                <input type="text" class="form-control" id="adresse" name="adresse">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="date_naissance" class="form-label">Birthdate</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>