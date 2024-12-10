<?php
session_start();

if (isset($_POST["username"])) {
    // récuperer les donnés
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifier le login
    if ($username === "admin" && $password === "1234") {
        // Connexion réussie
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: index.php");
    } else {
        // Sinon échec de la connexion
        $_SESSION["error"] = "Non d'utilisateur ou mot de passe incorret";
        header("Location: login.php");
    }
} else {
    // Si accès direct à process_login
    header("Location: login.php");
}
