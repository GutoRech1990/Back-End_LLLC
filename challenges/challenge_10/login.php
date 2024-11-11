<!-- Este é o formulário onde o usuário insere seu nome de usuário e senha. 
Quando o usuário envia o formulário, ele é redirecionado para process_login.php, 
que fará a verificação das credenciais. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Formulário de login -->
    <form method="POST" action="process_login.php">
        <label for="">Nome de Usuário: </label>
        <input type="text" name="username" required> <br>
        <label for="">Senha: </label>
        <input type="password" name="password" required> <br>
        <button type="submit">Entrar</button>
    </form>

    <!-- Este formulário:
        •	Envia os dados de username e password para process_login.php via método POST. -->
</body>

</html>