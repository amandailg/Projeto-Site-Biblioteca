<?php
    session_start();
    include_once("../include/conexao.php");

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $publicacao = $_POST["publicacao"];
    $edicao = $_POST["edicao"];
    $exemplar = $_POST["exemplar"];
    $isbn = $_POST["isbn"];
    $idFuncionario = $_SESSION['idUsuario'];

    $sql = "INSERT INTO livro(titulo, autor,".
    "editora, publicacao, edicao, exemplar, isbn, idFuncionario) ".
    " VALUES (".
    "'".$titulo."', ".
    "'".$autor."', ".
    "'".$editora."', ".
    "'".$publicacao."', ".
    "'".$edicao."', ".
    "'".$exemplar."', ".
    "'".$isbn."', ".
    "'".$idFuncionario."');";

    // echo $sql;

    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
        header("Location:consultaAcervo.php");
    } else {
        mysqli_close($conn);
        $_SESSION["ERRO"] = "Ocorreu um erro ao Cadastrar o Livro!";
        header("Location: ../erro/erro.php");
    }

?>