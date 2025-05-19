<?php

$nome_usuario = $_POST['usuario'];
$senha_usuario = $_POST['senha'];

//echo $nome_usuario;
//echo $senha_usuario;

$query_usuário = "SELECT usuario FROM cadastroUsuario WHERE usuario='$nome_usuario'";
$query_senha = "SELECT senha FROM cadastroUsuario WHERE usuario='$nome_usuario'";

//echo $query_usuário . "<br>";
//echo $query_senha;

$host = '127.0.0.1';
$porta = '3306';
$banco = 'artisper';
$servidor = 'root';
$senhaServidor = '135795';

try{
    $pdo = new PDO("mysql:host=$host; port=$porta; dbname=$banco; charset=utf8", $servidor, $senhaServidor);
    echo "<p style='color: green'>Conectado com sucesso!</p>";
} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

/*$nomeSQL = mysqli_query($query_usuário);
$senhaSQL = mysqli_query($query_senha);

if(password_verify($senha_usuario, $senhaSQL)){
    echo 'Login válido!';
} else {
    echo 'Senha incorreta!';
}

mysqli_close($dbc);*/