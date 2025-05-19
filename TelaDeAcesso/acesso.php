<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validacao.php" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario"><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <nav>
            <a href="esqueciMinhaSenha.php"><h6>Esqueci minha senha</h6></a>
            <a href="cadastroNovoUsuario.php"><h6>Cadastrar-me</h6></a>
        </nav>
        <input type="submit" value="ENTRAR">
    </form>
</body>
</html>