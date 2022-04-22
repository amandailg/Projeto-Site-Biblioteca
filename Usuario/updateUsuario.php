<?php

    session_start();

    include_once("../include/conexao.php");  
   

    $id = $_POST['idUsuario'];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $sexo = $_POST["sexo"];
    $dataNasc = $_POST["dataNasc"];

    unset($_SESSION['cpfUsuario']);

    if(isset($_POST['funcionario'])){
        $sql = "UPDATE funcionario SET nome = '".$nome.
        "', cpf = '".$cpf.
        "', login = '".$login.
        "', senha = '".$senha.
        "', sexo = '".$sexo.
        "', dataNasc = '".$dataNasc.
        "' where idFuncionario = '".$_POST['idUsuario']."';";

        $_SESSION["idUsuario"] = $_POST['idUsuario'];
    } else {
        $sql = "UPDATE usuario SET nome = '".$nome.
        "', cpf = '".$cpf.
        "', login = '".$login.
        "', senha = '".$senha.
        "', sexo = '".$sexo.
        "', dataNasc = '".$dataNasc.
        "' where idUsuario = '".$id."';";

        $_SESSION["idUsuario"] = $id;
    }
    
    $_SESSION["cpfUsuario"] = $_POST["cpf"];

    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
        header("Location:formEditUsuario.php");
        $_SESSION['AtualSucesso'] = "Atualizado com sucesso!";
    } else {
        mysqli_close($conn);
        $_SESSION["ERRO"] = "Ocorreu um erro ao Alterar o Usuário!";
        header("Location: ../erro/erro.php");
    }
    
?>