<?php
session_start();
	if(!empty($_SESSION['usuarios_id'])){
echo "<div id = 'saida'><a href='../Login/sair.php'>SAIR</a></div>"; 
}else{
			$_SESSION["msg"] = ('Acesso negado!');
			header("Location: ../Login/index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>AULA1</title>
</head>
<style>
	footer{
		position: absolute;
		bottom: 0px;
		color: #fff;
		font-size: 12;
	}
	h1{
		color:#fff;
		font-family: Arial;
	}
	p{
		color: #fff;
		font-size: 15pt;
		background-color: rgba(190,190,190,0.3);
		width: 900px;
	}
	div#saida a{
		padding: 10px 20px;
		display: inline-block;
		color: white;
		text-decoration: none;
		background-color: #00FF00;
		text-transform: uppercase;
		position: relative;
		left: 10px;
		transition: 0.2s;
		-webkit-transition: 0.2s;-o-transition: 0.2s;transition: 0.2s;

	}

	div#saida a:hover{
		background-color: #04B4AE;
		text-decoration: underline;
	}
	body{
		background-image: url(imagens/cacho.gif);
		background-size: 100%;
		margin: 0px;
		padding: 0px;
	}

	div#menu{

	}

	div#menu ul{
		margin: 0px;
		list-style: none;
	}

	div#menu ul li{
		display: inline;
	}

	div#menu ul li a{
		padding: 10px 20px;
		display: inline-block;
		color: white;
		text-decoration: none;
		background-color: #00FF00;
		text-transform: uppercase;
		position: relative;
		left: 170px;
		transition: 0.2s;
		-webkit-transition: 0.2s;-o-transition: 0.2s;transition: 0.2s;


	}

	div#menu ul li a:hover{
		background-color: #04B4AE;
		text-decoration: underline;

	}
</style>
<body>
	<div id = "menu">
		<ul>
			<li><a href = "oquee.php"><strong>HOME</strong></a></li>
			<li><a href = "EC.html"><strong>ECOLOGICAMENTE CORRETO</strong></a></li>
			<li><a href = "EV.html"><strong>ECONIMICAMENTE VIAVEL</strong></a></li>
			<li><a href = "SJ.html"><strong>SOCIALMENTE JUSTO</strong></a></li>

		</ul>
	</div>
<h1>O que é sustentabilidade?</h1>
<p>O termo “desenvolvimento sustentável” foi usado pela primeira vez em 1987, por Gro Harlem Brundtland,<br> ex-primeira-ministra da Noruega.A sustentabilidade procura
“envolve atender às necessidades do presente<br> sem comprometer a possibilidade de as futuras gerações também satisfazerem suas necessidades”.</p>


<p>Atualmente, existe entre as pessoas a cultura do “consumismo”, que enriquece setores da economia,<br> como empresas e indústrias, para produzir e vender seus produtos. Infelizmente, também muito do que<br> se consome acaba virando desperdício, além de se contar que muita da matéria prima dos produtos são<br> extraídos da natureza de forma pouco controlada.</p>
<p>O modelo de sociedade nos levou a consequências drásticas, tanto ambiental como também de<br> desigualdade social.
Diante disso, a sustentabilidade é uma forma de encontrar um equilíbrio entre o que<br> se consome e o que é necessário para a confecção dos produtos.<br> Assim, temos as diretrizes entre ser: ecologicamente correto, socialmente justo e economicamente viável.</p>



<footer>Nome: Gabriel Dos Santos
1º sem/2020 – Ciência da Computação UNIP</footer>

</body>
</html>