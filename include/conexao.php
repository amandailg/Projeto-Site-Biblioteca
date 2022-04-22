<?php
	$servidor = "localhost:3307";
	$usuario = "root";
	$senha = "";
	$dbname = "biblioteca";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	

	if(!$conn){
		$_SESSION['ERRO'] = "Falha na conexão: " . mysqli_connect_error();
		header("Location:../erro/erro.php");
	}
	
?>