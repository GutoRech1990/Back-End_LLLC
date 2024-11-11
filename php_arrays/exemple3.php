<?php
// Tableau multidimensionel
$employees = [
    "John" => ["age" => 24, "poste" => "Developer"],
    "Alice" => ["age" => 32, "poste" => "Data Architect"],
    "Bob" => ["age" => 54, "poste" => "UX Desinger"]
];

// Afficher  l'age de Alice
echo $employees["Alice"]["age"];




// Tableau multidimensionel indexé
$matrice = [
    [11, 12, 13],
    [21, 22, 23],
    [31, 32, 33],
];
echo "<br>";

// Afficher la deuxieme valeur du deuxieme sous tableau (valeur 22)
echo $matrice[1][1];
