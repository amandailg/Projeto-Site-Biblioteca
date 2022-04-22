<?php 
	session_start();
	include_once("include/config.php");
	
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <link rel="icon" href="imagem/logo.png">
    <title>Biblioteca</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">

  </head>
  <body class="login">
    <div class="container">
         <div class="divlogo">
         	 <img src="./imagem/logo.png" class="logo" />
         </div>      
      <form class="form-signin" method="POST" action="include/valida.php">
        <h2 class="form-signin-heading">BIBLIOTECA</h2>
       
        <label for="inputLogin" class="sr-only">Login</label>
        <input type="text" name="login" id="inputLogin" class="form-control" placeholder="Login" required autofocus>
       
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        
        <a href="./Usuario/usuario.php"><p style="text-align: center; padding-top: 20px;">Não está cadastrado? Cadastre-se!<p><a>
      </form>

      
	  <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div> <!-- /container -->
  </body>
</html>
