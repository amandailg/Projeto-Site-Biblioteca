<?php
    session_start();
    include_once("../include/conexao.php");

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $sexo = $_POST["sexo"];
    $dataNasc = $_POST["dataNasc"];
    
    $sql = "INSERT INTO USUARIO(nome,".
    "cpf, dataNasc, sexo, login, senha) ".
    " VALUES (".
    "'".$nome."', ".
    "'".$cpf."', ".
    "'".$dataNasc."', ".
    "'".$sexo."', ".
    "'".$login."', ".
    "'".$senha."');";

    // echo $sql;

    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
        header("Location:../index.php");
    } else {
        mysqli_close($conn);
        $_SESSION["ERRO"] = "Ocorreu um erro ao Cadastrar o Usuário!";
        echo $sql;
        header("Location: ../erro/erro.php");
    }

?>