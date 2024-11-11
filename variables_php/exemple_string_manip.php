<?php 

$text = "Hello, kjhsdjkfhskjdfh slkdfhsldjflsd lskdjflsjdflk jslkdjflksdjflk World!";
$pos = strpos($text, "World");
echo "Position: {$pos} <br>";
$extrait = substr($text, $pos, 5); // variável, a partir de qual posição, quantas posições
echo $extrait;

?>