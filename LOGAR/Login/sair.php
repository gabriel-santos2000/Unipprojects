<?php
session_start();
unset($_SESSION['usuarios_id'],$_SESSION['nome'], $_SESSION['senha']);

$_SESSION['msg'] = "Deslogado com sucesso!";
header("Location: index.php");