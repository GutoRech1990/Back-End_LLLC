<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Loterie</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupère les numéros de l'utilisateur
        $userNum1 = (int)$_POST['num1'];
        $userNum2 = (int)$_POST['num2'];
        $userNum3 = (int)$_POST['num3'];
        $userNum4 = (int)$_POST['num4'];
        $userNum5 = (int)$_POST['num5'];
        $userNum6 = (int)$_POST['num6'];

        // Génération de 6 numéros de loterie uniques
        $lotteryNum1 = mt_rand(1, 49);
        do {
            $lotteryNum2 = mt_rand(1, 49);
        } while ($lotteryNum2 == $lotteryNum1);
        do {
            $lotteryNum3 = mt_rand(1, 49);
        } while (in_array($lotteryNum3, [$lotteryNum1, $lotteryNum2]));
        do {
            $lotteryNum4 = mt_rand(1, 49);
        } while (in_array($lotteryNum4, [$lotteryNum1, $lotteryNum2, $lotteryNum3]));
        do {
            $lotteryNum5 = mt_rand(1, 49);
        } while (in_array($lotteryNum5, [$lotteryNum1, $lotteryNum2, $lotteryNum3, $lotteryNum4]));
        do {
            $lotteryNum6 = mt_rand(1, 49);
        } while (in_array($lotteryNum6, [$lotteryNum1, $lotteryNum2, $lotteryNum3, $lotteryNum4, $lotteryNum5]));

        // Comparaison des numéros de l'utilisateur avec les numéros générés
        $matchingCount = 0;
        if (in_array($userNum1, [$lotteryNum1, $lotteryNum2, $lotteryNum3, $lotteryNum4, $lotteryNum5, $lotteryNum6])) $matchingCount++;
        if (in_array($userNum2, [$lotteryNum1, $lotteryNum2, $lotteryNum3, $lotteryNum4, $lotteryNum5, $lotteryNum6])) $matchingCount++;
        if (in_array($userNum3, [$lotteryNum1, $lotteryNum2, $lotteryNum3, $lotteryNum4, $lotteryNum5, $lotteryNum6])) $matchingCount++;
        if (in_array($userNum4, [$lotteryNum1, $lotteryNum2, $lotteryNum3, $lotteryNum4, $lotteryNum5, $lotteryNum6])) $matchingCount++;
        if (in_array($userNum5, [$lotteryNum1, $lotteryNum2, $lotteryNum3, $lotteryNum4, $lotteryNum5, $lotteryNum6])) $matchingCount++;
        if (in_array($userNum6, [$lotteryNum1, $lotteryNum2, $lotteryNum3, $lotteryNum4, $lotteryNum5, $lotteryNum6])) $matchingCount++;

        // Affichage des résultats
        echo "<p>Vos numéros : $userNum1, $userNum2, $userNum3, $userNum4, $userNum5, $userNum6</p>";
        echo "<p>Numéros de loterie : $lotteryNum1, $lotteryNum2, $lotteryNum3, $lotteryNum4, $lotteryNum5, $lotteryNum6</p>";
        echo "<p>Nombre de correspondances : $matchingCount</p>";

        if ($matchingCount === 6) {
            echo "<p>Félicitations, vous avez gagné le jackpot !</p>";
        } elseif ($matchingCount >= 3) {
            echo "<p>Vous avez un gain partiel !</p>";
        } else {
            echo "<p>Désolé, vous avez perdu.</p>";
        }
    }
    ?>

    <h2>Entrez vos numéros de loterie</h2>
    <form method="post">
        <label>Numéro 1 : <input type="number" name="num1" min="1" max="49" required></label><br>
        <label>Numéro 2 : <input type="number" name="num2" min="1" max="49" required></label><br>
        <label>Numéro 3 : <input type="number" name="num3" min="1" max="49" required></label><br>
        <label>Numéro 4 : <input type="number" name="num4" min="1" max="49" required></label><br>
        <label>Numéro 5 : <input type="number" name="num5" min="1" max="49" required></label><br>
        <label>Numéro 6 : <input type="number" name="num6" min="1" max="49" required></label><br><br>
        <button type="submit">Vérifier</button>
    </form>

</body>

</html>