<?php

// Function qui ajoute 5 au nombre donné em parametre 
function ajoute_cinq($nombre)
{
    // retourner le resultat dans le contexte global
    return $nombre + 5;
}

// echo ajoute_cinq(10);
$resultat = ajoute_cinq(10);
echo $resultat;
