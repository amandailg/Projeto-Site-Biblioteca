<?php 
	session_start();
	include_once("../include/config.php");
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Livro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- DATATABLES -->
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.js"></script>
<link rel="stylesheet" href="../css/dataTables.bootstrap.css">
<link rel="stylesheet" href="../css/tabela.css">

<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/menu.css">

<script src="../js/cliente.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">

 </head>
<body>
<header>
<?php include_once("../menu/menu1.php");?>
<header>
<div class="container">
  <div class="row content">
    <div class="col-sm-12">
      <h1 class="text-center">Formulário de Livro</h1>
      <br>
      <form action="insertLivro.php" method="POST">
        <div class="form-group">
            <label>Título:</label>
            <input type="text" class="form-control" id="titulo"
            name="titulo" placeholder="Título" required>
        </div>
        <div class="form-group">
            <label>Autor:</label>
            <input type="text" class="form-control" id="autor"
            name="autor" placeholder="Autor" required>
        </div>
        <div class="form-group">
            <label>Editora:</label>
            <input type="text" class="form-control" id="editora"
            name="editora" placeholder="Editora" required>
        </div>
        <div class="form-group">
            <label>Publicação:</label>
            <input type="year" class="form-control" id="publicacao"
            name="publicacao" placeholder="Publicação" required>
        </div>
        <div class="form-group">
            <label>Edição:</label>
            <input type="text" class="form-control" id="edicao"
            name="edicao" placeholder="Edição" required>
        </div>
        <div class="form-group">
            <label>Exemplar:</label>
            <input type="text" class="form-control" id="exemplar"
            name="exemplar" placeholder="Exemplar" required>
        </div>
        <div class="form-group">
            <label>ISBN:</label>
            <input type="number" class="form-control" id="isbn"
            name="isbn" placeholder="ISBN" required>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary btn-lg float-right">
            CADASTRAR</button>
            <a href="consultaAcervo.php"><button 
            type="button"class="btn btn-primary btn-lg float-right">
            Voltar</button></a>
        </div>
      </form>
    </div>
  </div>
</div>
<br><br><br><br>
<?php include_once("../include/footer.php"); ?>
</body>
</html>
