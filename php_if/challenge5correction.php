<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Energy Consumption Forecast</h1>
    <?php
    $totalEnergyConsumption = 50000;
    $monthlyIncrease = 200;
    $efficiencyImprovement = 0.001;
    $years = 5;

    $newEnergyConsumption = $totalEnergyConsumption;
    $months = $years * 12;

    for ($i = 1; $i <= $months; $i++) {
        // Ajouter l'augmentation mensuelle de la consommation d'énergie
        $newEnergyConsumption += $monthlyIncrease;
        $newEnergyConsumption *= (1 - $efficiencyImprovement);
    }

    $forecastedEnergyConsumption = round($newEnergyConsumption, 2);

    echo "<p>La consommation d'énergie prévue après $years ans est <strong>$forecastedEnergyConsumption kWh</strong>,</p>";

    ?>
</body>

</html>