<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="retornoCadastro.php" method="post" id="cadastroNovoUsuario">
        <label for="nome">Nome Completo:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required><br>
        <label for="dataDeNascimento">Data de Nascimento:</label>
        <input type="text" name="dataDeNascimento" id="dataDeNascimento" required><br>
        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo" id="sexo" required><br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" required><br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required><br>
        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" required><br>
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" required><br>
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required><br>
        <label for="senha">Senha:</label>
        <input type="text" name="senha" id="senha" required><br>
        <label for="confirmarSenha">Confirmar Senha:</label>
        <input type="text" name="confirmarSenha" id="confirmarSenha" required><br>
        <input type="submit" value="Cadastrar">
        <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
    </form>

    <!--<script>
        const formulario = document.getElementById('formularioCadastro');
        const senha = document.getElementById('senha');
        const confirmarSenha = document.getElementById('confirmarSenha');

        formulario.addEventListener('submit', function(event) {
            if (senha.value !== confirmarSenha.value) {
                event.preventDefault();
                alert('As senhas não coincidem!');
                senha.style.borderColor = 'red';
                confirmarSenha.style.borderColor = 'red';
            } else {
                senha.style.borderColor = 'green';
                confirmarSenha.style.borderColor = 'green';
            }
        });
    </script>-->
</body>
</html>