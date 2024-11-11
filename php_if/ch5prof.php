<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Prévisions de consommation d'énergie</h1>
    <?php

    $totalEnergie = 50000;
    $augmentationMensuelle = 200;
    $facteurReduction = 0.001;
    $annees = 5;

    for ($m = 1; $m <= ($annees * 12); $m++) {
        $totalEnergie = $totalEnergie + $augmentationMensuelle;
        $totalEnergie = $totalEnergie * (1 - $facteurReduction);
        $totalEnergie = round($totalEnergie, 2);
    }

    echo "<p>Le total d'energie apres {$annees} ans est de: <strong>{$totalEnergie}</strong></p>";

    ?>
</body>

</html>