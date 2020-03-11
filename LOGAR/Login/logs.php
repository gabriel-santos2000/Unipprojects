<?php

class DB{
	private static $con;
	public function __construct(){}
	public static function conn(){
		if(is_null(self::$con)){
			self::$con= new PDO('mysql:host=127.0.0.1;dbname=login','root','1809');
		}
		return self::$con;
	}
}

$usuario = $_POST['usuario'];
$senha = $_POST['password'];

$i = DB::conn()->prepare("SELECT * FROM  usuarios WHERE usuario = ?");
$i -> execute(array($usuario));

$hash_senha = null;
$hash_senha = $i->fetch()['senha'];

if(password_verify($senha, $hash_senha)){
	header('location:../UNIP/oquee.html');
}else{
header('location:index.html');
}