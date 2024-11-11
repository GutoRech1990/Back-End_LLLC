<?php
// Este arquivo encerra a sessão do usuário e o redireciona para a página inicial ou de login.

session_start();
session_unset();
session_destroy();

header("Location: index.php"); // Redireciona para a página inicial
exit();

// Neste arquivo:
// 	•	session_unset() remove todas as variáveis de sessão.
// 	•	session_destroy() encerra a sessão completamente.
// 	•	Redirecionamos o usuário para index.php.