<?php
// Démarrage de la session
session_start();

// Vérifier si le formulaire a été envoyé
if (isset($_POST["submit"])) {
    // Récupération des donnés envoyées par le formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "1234") {
        // Regénerer l'ID de session pour empêcher la fixation de session
        session_regenerate_id(true);

        // Création de varialbles de session
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        echo "Redirection...";

        // Redirection vers la page d'accueil utilisateur
        header("Location: ../index.php");
        exit();
    } else {
        // Redirection vers la page login.php
        echo "<script>
        alert('Utilisateur ou Mot de passe incorrect!!!');
        window.location.href = 'login.php';
        </script>";
        exit();
    }
}

/* session_regenerate_id(true); - Cette fonction régénère l'identifiant de session actuel et en crée un nouveau. 
Le paramètre true indique que l'ancien identifiant doit être supprimé. 
Cela permet d'éviter les attaques par fixation de session, où un attaquant pourrait essayer de réutiliser un ancien identifiant de session. */

/* $_SESSION["logged_in"] = true; - Ici, une variable de session appelée logged_in est créée et fixée à true. 
Cela indique que l'utilisateur est authentifié et connecté au système. */

/* $_SESSION["username"] = $username; - Une autre variable de session appelée nom d'utilisateur est créée et fixée à la valeur du nom d'utilisateur fourni 
dans le formulaire de connexion. 
Cette variable peut être utilisée pour identifier l'utilisateur dans d'autres parties du système. */