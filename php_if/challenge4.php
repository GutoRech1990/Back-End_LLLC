<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <?php

    echo "<h2>Systéme de points de fidelité</h2>";

    $loyaltypoints = 6000;

    echo "Points de fidelité: {$loyaltypoints} <br>";

    if ($loyaltypoints < 3000) {
        echo "Vous avez moins de 3000 points de fidelité. Aucune réduction n'est disponible.";
    } elseif ($loyaltypoints < 6000) {
        echo "Vous pouvez dépenser 3000 points de fidelité pour une réduction de 5%.";
    } else {
        echo "Vous pouvez dépenser 6000 points de fidelité pour une réduction de 15%.";
    }
    ?>
</body>

</html>