<?php
// Esta é a página inicial do sistema. 
// Ela exibe um conteúdo diferente dependendo se o usuário está logado ou não. 
// Se o usuário está logado, damos as boas-vindas a ele; caso contrário, pedimos que faça login.

// Neste arquivo:
// 	•	Verificamos se o usuário está logado ao checar a variável de sessão $_SESSION['username'].
// 	•	Exibimos um link para fazer login se o usuário não estiver logado.

session_start();

if (isset($_SESSION['username'])) {
    echo "Bem-vindo, " . $_SESSION['username'] . "! <a href='logout.php'>Sair</a>";
    echo "<br><a href='protected.php'>Acessar página protegida</a>";
} else {
    echo "Você não está logado. <a href='login.php'>Faça login</a>";
}
