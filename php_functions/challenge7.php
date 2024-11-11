<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        text-align: center;
    }

    h1 {
        background-color: black;
        color: aliceblue
    }

    h3 {
        background-color: red;
        color: aliceblue;
    }

    p {
        background-color: green;
        color: aliceblue;
        font-size: 1.5em;
    }
    </style>
</head>

<body>
    <?php

    function calculatetimeOverlap($offset1, $offset2)
    {
        // Heures habituelles en UTC
        $startUTC = 12;
        $endUTC = 18;

        // Calcule du décalage UTC de chaque participant
        echo "<h1>Timezone for each participant</h1>";
        // Participant 1
        $start_one = $startUTC + $offset1;
        $end_one = $endUTC + $offset1;

        echo "Participant 1 (UTC {$offset1}) from <strong>{$start_one}h00 to {$end_one}h00</strong> <br>";

        // Participant 2
        $start_two = $startUTC + $offset2;
        $end_two = $endUTC + $offset2;
        echo "Participant 2 (UTC {$offset2}) from <strong>{$start_two}h00 to {$end_two}h00</strong> <br><br>";

        if ($start_one == $end_two || $start_two == $end_one) {
            echo "<h3>No meeting hours available for these time zones</h3>";
        } elseif ($end_one < $end_two) {
            echo "<p>Suggested meeting time: <strong>{$start_two}h00 to {$end_one}h00 UTC</strong></p>";
        } elseif ($end_two < $end_one) {
            echo "<p>Suggested meeting time: <strong>{$start_one}h00 to {$end_two}h00 UTC</strong></p>";
        }
    }

    calculatetimeOverlap(0, -4);

    function suggestOptimalMeetingTime() {};

    ?>

</body>

</html>