<?php
// Este arquivo contém a lógica de verificação de login. 
// Ele verifica se o nome de usuário e a senha são válidos, 
// iniciando uma sessão em caso de sucesso.

session_start();
include 'config.php'; // Inclui a lista de usuários

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o nome de usuário existe e a senha está correta
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username; // Cria a sessão
        header("Location: index.php"); // Redireciona para a página inicial
        exit();
    } else {
        echo "Nome de usuário ou senha incorretos!";
    }
}

// Neste arquivo:
// 	•	Verificamos as credenciais enviadas pelo formulário de login.
// 	•	Se as credenciais estão corretas, criamos uma sessão com $_SESSION['username'] e redirecionamos para index.php.
// 	•	Se as credenciais estão incorretas, exibimos uma mensagem de erro.