<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Energy Consumption Threshold Forecast</h1>
    <?php
    $totalEnergyConsumption = 100000; //kWh
    $monthlyIncrease = 500;
    $efficiencyImprovement = 0.0005;
    $energyCapacityThreshold = 150000;
    $maxMonth = 600;

    $compteurMois = 0;

    // Tant que $totalEnergyConsumption est inferior a $energyCapacityThreshold repete le bloc d'operation.
    while ($totalEnergyConsumption < $energyCapacityThreshold) {
        $totalEnergyConsumption += $monthlyIncrease;
        $totalEnergyConsumption *= (1 - $efficiencyImprovement);
        $compteurMois++;
        // Si le compteur month est superior a maxMonth alors on arrete la boucle
        if ($compteurMois > $maxMonth) {
            break;
        }
    }

    if ($totalEnergyConsumption >= $energyCapacityThreshold) {
        echo "It will take: <strong>$compteurMois months</strong> to reach or exceed the threshold of $energyCapacityThreshold kWh.<br> ";
    } else {
        echo "d'ici $maxMonth ";
    }


    echo "It will take: <strong>$compteurMois months</strong> to reach or exceed the threshold of $energyCapacityThreshold kWh.<br> ";
    echo round($totalEnergyConsumption);


    ?>
</body>

</html>