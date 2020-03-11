<?php
//Arquivo de conexao ao banco de dados
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "1809";
$dbname = "login";

//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);