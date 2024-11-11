<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Entrez vos 6 numéros de lotterie (de 1 a 49)</h1>
    <form action="" method="post">
        <input type="number" name="num_user1" min="1" max="49" id="">
        <input type="number" name="num_user2" min="1" max="49" id="">
        <input type="number" name="num_user3" min="1" max="49" id="">
        <input type="number" name="num_user4" min="1" max="49" id="">
        <input type="number" name="num_user5" min="1" max="49" id="">
        <input type="number" name="num_user6" min="1" max="49" id="">
        <input type="submit" value="Vérifier Numéros">
    </form>

    <?php
    // Generer aleotoirement 6 numeros

    $num1 = mt_rand(1, 49);
    $num2 = mt_rand(1, 49);
    $num3 = mt_rand(1, 49);
    $num4 = mt_rand(1, 49);
    $num5 = mt_rand(1, 49);
    $num6 = mt_rand(1, 49);

    // Est-ce que le formulaire a été envoyé (en testant si $num_user1 a été défini)
    if (isset($_POST["num_user1"])) {
        // Afficher les numeros generé par le systéme aléatoire
        echo "<p>Les numéros di turage sont: $num1, $num2, $num3, $num4, $num5, $num6,</p>";

        $num_user1 = htmlspecialchars($_POST["num_user1"]);
        $num_user2 = htmlspecialchars($_POST["num_user2"]);
        $num_user3 = htmlspecialchars($_POST["num_user3"]);
        $num_user4 = htmlspecialchars($_POST["num_user4"]);
        $num_user5 = htmlspecialchars($_POST["num_user5"]);
        $num_user6 = htmlspecialchars($_POST["num_user6"]);

        // Afficher les numéros envoyé par l'utilisateur
        echo "<p>Vos numéros: $num_user1, $num_user2, $num_user3, $num_user4, $num_user5, $num_user6</p>";

        // Comaprer les numéros utilisateur avec les numéros de lotterie
        $cmpt_trouves = 0;

        for ($x = 1; $x <= 6; $x++) {
            for ($y = 1; $y <= 6; $y++) {
                if (${"num_user" . "$x"} == ${"num" . $y}) {
                    $cmpt_trouves++;
                }
            }
        }

        // Afficher combien de numéros trouvés
        echo "<p>Vous avez trouvé $cmpt_trouves numéros</p>";

        // Determiner si le jouer a gagner ou pas 
        if ($cmpt_trouves == 6) {
            echo "<p>Vous avez gagné</p>";
        } elseif ($cmpt_trouves >= 3) {
            echo "<p>Pas mal</p>";
        } elseif ($cmpt_trouves < 3) {
            echo "<p>Vous avez perdu</p>";
        }
    }

    ?>


</body>

</html>