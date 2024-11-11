<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="center">
        <?php
        // Esta é a página inicial do sistema.
        // Ela exibe um conteúdo diferente dependendo se o usuário está logado ou não.
        // Se o usuário está logado, damos as boas-vindas a ele; caso contrário, pedimos que faça login.

        // Neste arquivo:
        // 	•	Verificamos se o usuário está logado ao checar a variável de sessão $_SESSION['username'].
        // 	•	Exibimos um link para fazer login se o usuário não estiver logado.

        session_start(); // Inicia a sessão para acessar as variáveis de sessão

        // Verifica se o usuário está logado
        if (isset($_SESSION['username'])) {
            // Se o usuário estiver logado, exibe uma mensagem de boas-vindas e links adicionais
            echo "<h1>Bem-vindo, " . $_SESSION['username'] . "!</h1>" . "<a href='logout.php'>Sair</a>";
            echo "<br><a href='protected.php'>Acessar página protegida</a>";
        } else {
            // Se o usuário não estiver logado, exibe uma mensagem de boas-vindas geral e o link de login
            echo "Você não está logado. <a href='login.php'>Faça login</a>";
        }

        ?>
    </div>
</body>

</html>