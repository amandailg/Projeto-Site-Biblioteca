<?php 
	session_start();
	include_once("../include/config.php");
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Acervo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

<!-- DATATABLES -->
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.js"></script>
<link rel="stylesheet" href="../css/dataTables.bootstrap.css">
<link rel="stylesheet" href="../css/tabela.css">

<link rel="stylesheet" href="../css/bootstrap.css">


<script src="../js/cliente.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">

<link rel="stylesheet" href="../css/menu.css">
 </head>
<body>
<header>
<?php include_once("../menu/menu1.php") ?>
</header>
<div class="container">
        <div class="divlogo">
         	 <img src="../imagem/logo.png" class="logo" />
        </div>   
        <?php include_once("../menu/menu1.php") ?>
      <h1 class="text-center">Acervo da Biblioteca</h1>
      <br><br>
      <?php include_once("getLivro.php"); ?>
      <p class="text-center text-danger">
			<?php if(isset($_SESSION['adicionarErro'])){
				echo $_SESSION['adicionarErro'];
				unset($_SESSION['adicionarErro']);
			}?>
		    </p>
    <div class="table-responsive">          
            <table id="clienteTable" class="table table-striped table-berdered" style="width:100%">
                <thead class="thread-dark">
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Publicação</th>
                    <th>Edição</th>
                    <th>Exemplar</th>
                    <th>ISBN</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach($rows as $row){
                ?>
                    <tr>
                        <td><?php echo $row['titulo'] ?></td>
                        <td><?php echo $row['autor'] ?></td>
                        <td><?php echo $row['editora'] ?></td>
                        <td><?php echo $row['publicacao'] ?></td>
                        <td><?php echo $row['edicao'] ?></td>
                        <td><?php echo $row['exemplar'] ?></td>
                        <td><?php echo $row['isbn'] ?></td>
                    </tr>

                <?php
                    }
                ?>

                </tbody>
            </table>
            </div>
            <br>
            <a href="../include/validaFunc.php"><button 
            type="button" class="btn btn-primary btn-lg" style="margin-left: 30px">
            ÁREA DO FUNCIONÁRIO</button></a> 
    </div>
<br><br><br><br>
<?php include_once("../include/footer.php"); ?>
</body>
</html>
