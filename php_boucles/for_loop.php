<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Une boucle for qui va afficher un compteur de 0 jusqu'a 10

    echo "<ul>";
    for ($i = 0; $i < 11; $i++) {
        echo "<li> $i </li>";
    }
    echo "</ul>"

    // éviter les bucles infinies
    // for ($i = 0; $i > 10; $i ++) {
    //     echo $i . "<br>";
    // }

    ?>
</body>

</html>