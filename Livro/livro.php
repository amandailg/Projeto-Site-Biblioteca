<?php 
	session_start();
	include_once("../include/config.php");
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Funcionário</title>
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
      <h1 class="text-center">Área do Funcionário</h1>
      <br><br>
      <p class="text-center text-success">
			<?php if(isset($_SESSION['adicionarSuces'])){
				echo $_SESSION['adicionarSuces'];
				unset($_SESSION['adicionarSuces']);
			}?>
		  </p>
      <br>
      <div class="text-center">
        <a href="formLivro.php" class="btn btn-primary btn-lg">CADASTRAR LIVRO</a>
        <a href="../Usuario/formFuncionario.php" class="btn btn-primary btn-lg">CADASTRAR FUNCIONÁRIO</a>
      </div>
      <br>
      <?php include_once("getLivro.php"); ?>
      <div class="table-responsive">          
            <table id="clienteTable" class="table table-striped table-berdered" style="width:100%">
                <thead class="thread-dark">
                <tr>
                    <th><i class="glyphicon glyphicon-pencil"></i> Editar</th>
                    <th><i class="glyphicon glyphicon-remove"></i> Deletar</th>
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
                        <td>
                          <p title="Editar">
                            <a href="formEditLivro.php?id=<?php echo $row['idLivro'] ?>">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                          </p>
                        </td>
                        <td>
                          <p title="Remover">
                            <a data-href="deleteLivro.php?id=<?php echo $row["idLivro"];?>"
                               data-toggle="modal" 
                               data-target="#confirm-delete"
                               href="#">
                              <i class="glyphicon glyphicon-remove"></i>
                            </a>
                          </p>
                        </td>
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
            <div class="text-center">
            <a href="../Livro/consultaAcervo.php"><button 
            type="button" class="btn btn-primary btn-lg">
            Voltar</button></a>
            </div>
    </div>
  </div>
</div>

<!-- Modal de Exclusão -->

<div class="modal" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        DELETE
      </div>
      <div class="modal-body">
        <h2>Deseja excluir o livro do acervo?</h2>
      </div>
      <div class="modal-footer">
        <a id="btnDeleteC" class="btn btn-danger btn-ok">
        <span class="glyphicon glyphicon-ok-sign"></span>Deletar</a>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove">
        </span>Não</button>
      </div>
    </div>
  </div>
</div>
<!-- Final da Modal -->
<br><br><br><br>
<?php include_once("../include/footer.php"); ?>
</body>
</html>
