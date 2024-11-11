<?php 

$age = 25;
$estEmploye = true;

// Operateur AND: Les 2 condition doivent etre vrai

$resultat = ($age > 18) && $estEmploye;
echo "Resultat de l'operation AND: {$resultat} <br>";

$estEmploye = false;
$age = 17;

// Operateur OR: au moins une condition doit être vrai
$resultat = ($age > 18) || $estEmploye;
echo "Resultat de l'operation OR: {$resultat}";

?>