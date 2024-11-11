<?php

function bonjour($text)
{
    // $text = "Bonjour depuis la lune.";
    echo "$text <br>";
}

// Variable global
$text = "Bonjour depuis Mars";

bonjour($text);

// 200 lignes de code

$text = "Bonjour depuis la Lune";
bonjour($text);

// 200 lignes de code

$text = "Bonjour depuis la Terre";
bonjour($text);
