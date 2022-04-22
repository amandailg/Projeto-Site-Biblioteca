<?php
session_start();
include_once("../include/config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="description" content="">
    <link rel="icon" href="../imagem/logo.png">
    <title>Cadastro de Usuário</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/menu2.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
   
     
   <!------ Include JS ---------->   
   <script src="../js/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/menu2.js"></script>
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
    
 
  </head>

  <body class="login">
           <!-- AREA DO CORPOR DO SITE -->
           <main class="page-content">           		
           		 <div class="container telaForm">		
                		<!--  ERROS  -->
                		<?php if(isset($_SESSION['loginErro'])){ ?>
                    		<div class="alert alert-danger ajustaTam" role="alert">
                              <?php 	
                                    echo $_SESSION['loginErro'];
                    				unset($_SESSION['loginErro']);
                    			?>
                            </div>      
                		<?php } ?>                                 		
                 
                <div>
                 <div class="divlogo">
         	        <img src="../imagem/logo.png" class="logo" />
                 </div>  
                     <?php
                        include_once("formUsuario.php")
                     ?>
                </div>
      	  </main>
  	 </div>

  </body>
</html>
