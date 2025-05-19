<?php

$host = 'localhost';
$user = 'root';
$password = '135795';
$database = 'artisper';

$dbc = mysqli_connect($host, $user, $password, $database)
or die ("Erro ao conectar o banco de dados.");