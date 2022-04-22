<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Usuário</title>
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
    <?php include_once("../menu/menu1.php"); ?>
</header>
<div class="container">
  <div class="row content">
    <div class="col-sm-12">
      <h1 class="text-center">Cadastro de Funcionário</h1>
      <br>
      <form action="insertFuncionario.php" method="POST">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" id="nome"
            name="nome" placeholder="Nome Completo" required>
        </div>
        <div class="form-group">
            <label>CPF:</label>
            <input type="number" class="form-control" id="cpf"
            name="cpf" placeholder="CPF" required>
        </div>
        <div class="form-group">
            <label>Data de Nascimento:</label>
            <input type="date" class="form-control" id="dataNasc"
            name="dataNasc" required>
        </div>
        <div class="form-group">
            <label>Sexo:</label><br>
            <input type="radio" id="sexo" value="m"
            name="sexo" required> Masculino <br>
            <input type="radio" id="sexo" value="f"
            name="sexo" required> Feminino <br>
            <input type="radio" id="sexo" value="i"
            name="sexo" required> Outro
        </div>
        <div class="form-group">
            <label>Login:</label>
            <input type="text" class="form-control" id="login"
            name="login" placeholder="Login" required>
        </div>
        <div class="form-group">
            <label>Senha:</label>
            <input type="password" class="form-control" id="senha"
            name="senha" placeholder="Senha" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg" style="margin-right: 30px">
            CADASTRAR</button>
            <a href="../Livro/consultaAcervo.php"><button 
            type="button" class="btn btn-primary btn-lg" style="margin-left: 30px">
            VOLTAR</button></a>
        </div>
      </form>
    </div>
  </div>
</div>
<br><br><br><br>
<?php include_once("../include/footer.php"); ?>
</body>
</html>
