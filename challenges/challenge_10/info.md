Resumo do Fluxo

	1.	O usuário acessa index.php, onde é informado se está logado ou não.
	2.	Se o usuário não estiver logado, ele pode clicar no link para login.php e inserir suas credenciais.
	3.	login.php envia as credenciais para process_login.php, que verifica as credenciais com os dados no config.php.
	4.	Se as credenciais forem válidas, process_login.php inicia uma sessão e redireciona o usuário para index.php.
	5.	O usuário logado pode acessar protected.php, que é uma página restrita.
	6.	O usuário pode fazer logout em logout.php, que encerra a sessão e o redireciona para index.php.

Essa estrutura fornece um sistema básico de login em PHP sem um banco de dados, permitindo controle de acesso a páginas protegidas.