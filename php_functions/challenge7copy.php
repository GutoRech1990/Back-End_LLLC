<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            background-color: pink;
        }
    </style>
</head>

<body>
    <?php
    // Calculer le chevauchement et retourner celiu-ci sinon false
    function calculateTimeOverlap($offset1, $offset2)
    {
        // Definir les heures de travail des 2 participants
        $startUTC = 12;
        $endUTC = 18;

        // Calculer la fenetre de temps disponible du participant 1 en UTC
        $start1 = $startUTC + $offset1;
        $end1 = $endUTC + $offset1;

        // Calculer la fenetre de temps disponible du participant 2 en UTC
        $start2 = $startUTC + $offset2;
        $end2 = $endUTC + $offset2;

        // Calculer le chevauchement
        $OverlasStart = max($start1, $start2);
        $OverlapEnd = min($end1, $end2);
        // Alternative
        // $OverlasStart = $start1 > $start2 ? $start1 : $start2;
        // $OverlapEnd = $end1 > $end2 ? $end1 : $end2;


        // Vérifier s'il y a un cheveauchement 
        if ($OverlasStart < $OverlapEnd) {
            // Il y a un cheveauchement 
            return "<strong>" . $OverlasStart . ":00 á " . $OverlapEnd . ":00 UTC</strong>";
        } else {
            // Il n'y a pas de cheveauchement 
            return false;
        }
    }

    // Utilise la function calculerTimeOverlap pour proposer un créneau de reúnion
    function suggestOptimalMeetingTime($offset1, $offset2)
    {
        $resultat = calculateTimeOverlap($offset1, $offset2);
        if ($resultat === false) {
            echo "<span>Pas d'heure de réunion disponible</span>";
        } else {
            echo "Heure de RDV suggérée: " . $resultat;
        }
    }

    suggestOptimalMeetingTime(0, -4);
    echo "<br>";
    suggestOptimalMeetingTime(-5, 1);
    echo "<br>";
    suggestOptimalMeetingTime(7, 4);
    echo "<br>";

    ?>

</body>

</html>