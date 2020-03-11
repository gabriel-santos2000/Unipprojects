
<?php
session_start()
?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset = "UTF-8"/>
	<title>Tela Login</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
	<div id="corp">

		
		<h1>ENTRAR</h1>


		<?php
		if(isset($_SESSION['nao_autenticado'])):
	?>
	<div id = "msgerro">
	ERRO: Credencias invalidas!
</div>
<?php
endif;
unset($_SESSION['nao_autenticado']);

?>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

	<form method="POST" action="login.php">
		<input type="email" placeholder="USUARIO" name="usuario" required>
		<input type="password" placeholder="SENHA" name="password" required>
		<input type="submit" value="ACESSAR" name="click">
	</form>
</div>
</body>
</html>