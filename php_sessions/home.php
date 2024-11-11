<?php

session_start();

// Verification si le utilisateur n'est connecté
if (!isset($_SESSION["logged_in"])) {
    // Alors redirection vers index.html
    header("Location: index.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil Utilisateur</title>
</head>

<body>
    <h1>Bonjour <?php echo $_SESSION["username"] ?>.</h1>
    <p>Vous êtes maintenant connecté. Espace sécurisé!!</p>
</body>

</html>