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
    $efficinecyImprovement = 0.001;
    $years = 5;

    for ($mois = 1; $mois <= 5 * 12; $mois++) {
        // Augmentation mensuelle de la consommation d'energie
        $newEnergyConsumption = ($totalEnergyConsumption + $monthlyIncrease) - ($totalEnergyConsumption * $efficinecyImprovement);
        // echo "Mois " . $mois . " : " . round($newEnergyConsumption, 2)  . " kWh" .  "<br>";
        $totalEnergyConsumption = $newEnergyConsumption;
    }

    echo "The forecasted energy consumption after 5 years is: " . "<strong>" . round($totalEnergyConsumption, 2) . " kWh" . "</strong>";

    ?>
</body>

</html>