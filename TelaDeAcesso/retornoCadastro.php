<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            $senha = $_POST['senha'];
            $confirmarSenha = $_POST['confirmarSenha'];

            if($senha !== $confirmarSenha){
                echo "<p style='color: red;'>As senhas não coincidem. Por favor, tente novamente!</p>";
                // Você pode redirecionar de volta ao formulário ou exibir o mesmo com os dados preenchidos
            } else {
                // Aqui você prosseguir com o cadastro do usuário
                // Lembre-se de nunca armazenar senhas como texto plano!
                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

                // Exemplo: salvar no banco de dados, etc.
                echo "<p style='color: green'>Usuário cadastrado com sucesso!</p>";
                // Exemplo de exibição do hash só para demonstração
                echo "<p>Hash da senha gerado: $senhaHash</p>";
            }
         }
    ?>
    <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
</body>
</html> 