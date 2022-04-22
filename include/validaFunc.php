<?php	
	
    session_start();

	//Incluindo a conexão com banco de dados
	include_once("conexao.php");	

		$idFuncionario = $_SESSION['idUsuario'];
		$cpf = $_SESSION['cpfUsuario'];

		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM funcionario WHERE idFuncionario = '$idFuncionario' && cpf = '$cpf' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['adicionarSuces'] = "Acesso concedido!";
			header("Location: ../Livro/livro.php");
			
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de consulta
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['adicionarErro'] = "Acesso não concedido!";
			header("Location: ../Livro/consultaAcervo.php");
		}

?>