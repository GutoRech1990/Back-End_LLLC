<?php
// include_once 'functions_patients/get_patients.php';
// include_once 'functions_vaccins/get_vaccin.php';

// $patients = getPatients();
// $vaccins = getVaccins();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="container text-center w-75 h-75 rounded-3 p-3 border-glow bg-light">
        <h3 class="text-secondary">Welcome [user]</h3>
        <h1>Vaccination clinic</h1>
        <hr>
        <h4>Select the desired option</h4>

        <div class="d-flex justify-content-around mt-5 align-items-center">
            <div class="w-50 border border-primary-subtle d-flex flex-column m-5 p-5">
                <h4>Patients</h4>
                <a href="actions/new_patient.php" class="btn btn-primary mb-1">+ New patient</a>
                <a href="actions/check_patients.php" class="btn btn-info">Check all patients</a>
            </div>
            <div class="w-50 border border-primary-subtle d-flex flex-column m-5 p-5">
                <h4>Vaccins</h4>
                <button type="button" class="btn btn-primary mb-1">+ New vaccin</button>
                <button type="button" class="btn btn-info">Check all vaccins</button>
            </div>
        </div>
    </div>






</body>

</html>