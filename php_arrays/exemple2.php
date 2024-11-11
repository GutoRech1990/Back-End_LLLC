<?php

// Tableau associatif
$personne = [
    "nom" => "Victor",
    "age" => 30,
    "ville" => "Differdange"
];

// Afficher la ville
echo $personne["ville"] . "<br>";

// Changer l'age de la persone
$personne["age"] = 28;
echo $personne["age"] . "<br>";

// Ajouter un nouvel element à la fin du tableau
$personne["marrié"] = true;

var_dump($personne);

echo "<br>";
echo "<br>";

// en utilisant une boucle froeach

foreach ($personne as $cle => $valeur) {
    echo "$cle: $valeur <br>";
}
