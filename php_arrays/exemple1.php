<?php

$voitures = ["Volvo", "Mercedes", "Alfa Romeo"];

// Afficher la valeur à l'index 0
echo $voitures[0] . "<br>";

// Mettre à jour la valeur à l'index 0 (Update)
$voitures[0] = "Ford";

// Afficher la valeur à l'index 0
echo $voitures[0] . "<br>";

// Ajouter une nouvelle valeur à la fin du tableau
$voitures[] = "Fiat";

// Afficher le contenu du tableau
var_dump($voitures);
echo "<br>";
echo "<br>";


// en urtilisant une boucle for 
// Compter le nombre de voitures dan le tableau
$nbrVoiture = count($voitures);

for ($i = 0; $i < $nbrVoiture; $i++) {
    $position = $i + 1;
    echo $position . " - " . $voitures[$i] . "<br>";
}

// en urtilisant une boucle foreach
echo "<ol>";
foreach ($voitures as $voiture) {
    echo "<li>$voiture</li>";
}
echo "</ol>";
