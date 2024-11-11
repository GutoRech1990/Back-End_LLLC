<?php
// Esta é uma página protegida que só deve ser acessível por usuários logados. 
// Se o usuário tentar acessar esta página sem estar logado, 
// ele será redirecionado para a página de login.

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redireciona para a página de login se o usuário não estiver logado
    exit();
}

echo "Bem-vindo à página protegida, " . $_SESSION['username'] . "!";
?>


<!-- Neste arquivo:
	•	Verificamos se $_SESSION['username'] está definida, o que indica que o usuário está logado.
	•	Caso contrário, redirecionamos o usuário para login.php. -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="logout.php">Sair</a>
</body>

</html>