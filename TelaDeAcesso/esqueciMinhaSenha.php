<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
</head>
<body>
    <form action="emailEnviado.php" method="post">
        <h3>Recuperar senha</h3>
        <h5>Informe o email que havia cadastrado</h5>
        <input type="text" name="emailCadastrado" id="emailCadastrado">
        <input type="submit" value="Enviar"><br>
        <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
    </form>
</body>
</html>