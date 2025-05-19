<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover e-mail</title>
</head>
<body>
    <h4>Para sair de nossa lista de transmissão, basta informar o e-mail cadastrado.</h4>
    <form action="assinaturaCancelada.php" method="post">
        <label for="email">e-Mail:</label>
        <input type="text" name="email" id="email"><br />
        <input type="submit" value="Descadastrar">
    </form>
</body>

<?php

    $email = $_POST['email'];

    include_once conexaoComBD.php;

    $query = "DELETE FROM usuarioCadastrado WHERE email=$email";

    mysqli_query($dbc, $query) or die ('Erro ao remover email cadastrado.');

    echo 'Usuário removido com sucesso!';

    mysqli_close($dbc);

    // A verdade é que nem sei se este código realmente funcionará.
    // Por enquanto ficará na imensidão do vazio.
?>
</html>