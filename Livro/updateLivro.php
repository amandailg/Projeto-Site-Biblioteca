<?php
    session_start();
    include_once("../include/conexao.php"); 

    $id = $_POST["idLivro"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $publicacao = $_POST["publicacao"];
    $edicao = $_POST["edicao"];
    $exemplar = $_POST["exemplar"];
    $isbn = $_POST["isbn"];
    $idFuncionario = $_SESSION['idUsuario'];

    $sql = "UPDATE livro SET titulo = '".$titulo.
    "', autor = '".$autor.
    "', editora = '".$editora.
    "', publicacao = '".$publicacao.
    "', edicao = '".$edicao.
    "', exemplar = '".$exemplar.
    "', isbn = '".$isbn.
    "', idFuncionario = '".$idFuncionario.
    "' where idLivro = '".$id."';";

    // echo $sql;

    if(mysqli_query($conn, $sql)){
        mysqli_close();
        header("Location:consultaAcervo.php");
    } else {
        mysqli_close($conn);
        $_SESSION["ERRO"] = "Ocorreu um erro ao Alterar o Livro!";
        header("Location: ../erro/erro.php");
    }

?>