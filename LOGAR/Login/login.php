<?php
session_start();
//inclui a conexao
include_once("conexao.php");
//iniciar daqui
$click = filter_input(INPUT_POST, 'click', FILTER_SANITIZE_STRING);
	if($click){
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		//echo "$usuario, $senha";
		if((!empty ($usuario)) AND (!empty ($senha))){

			//Gerar a senha criptografada
			//echo password_hash($senha, PASSWORD_DEFAULT);
			//Pesquisar no DB
			//Buscar se existe o usuario
			$result_usuario = "SELECT usuarios_id, usuario, senha FROM usuarios WHERE usuario='$usuario'LIMIT 1";
			//Executar a querry
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			if($resultado_usuario){
				$row_usuario = mysqli_fetch_assoc($resultado_usuario);
				if(password_verify($senha, $row_usuario['senha'] )){
					$_SESSION['usuarios_id'] = $row_usuario['usuarios_id'];
					$_SESSION['nome'] = $row_usuario['nome'];
					$_SESSION['senha'] = $row_usuario['senha'];
					header("Location: ../UNIP/oquee.php");
				}else{

				$_SESSION['nao_autenticado'] = true;
				header("Location: index.php");
				}
			}

		}else{
			
			header("Location: index.php");
	}
		
	}else{
		
		header("Location: index.php");
	}
?>

	$_SESSION['msg']= "Login ou senha incorretos!";