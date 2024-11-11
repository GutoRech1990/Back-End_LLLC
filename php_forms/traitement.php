<?php

echo htmlspecialchars($_POST["nom"]);
echo "<br>";

// Si le filtrage echoue alors affiche "email invalide"
// Pour que l'email soit invalide le filtrage doit echouer
if (!filter_var(htmlspecialchars($_POST["mail"]), FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} else {
    echo "Email valid: " . htmlspecialchars($_POST["mail"]);
}

// if (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
//     echo "Email valid: " . $_POST["mail"];
// } else {
//     echo "Invalid email format";
// }