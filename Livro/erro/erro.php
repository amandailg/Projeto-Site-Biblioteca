<!DOCTYPE html>
<html lang="en">
<head>
  <title>ERRO</title>
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
<div class="container erro">
  <div class="row content">
  <div class="col-sm-12">
    <div class="divlogo">
      <img src="../imagem/logo.png" class="logo" />
    </div>  
        <br><br>
        <div class="alert alert-danger">
            <?php
                echo "Desculpe :(<br>";
                session_start();
                echo $_SESSION["ERRO"];
            ?>
        </div>
      
    </div>
  </div>
</div>
<br><br><br><br>
<?php include_once("../include/footer.php"); ?>
</body>
</html>
