<?php
    include_once("../include/conexao.php");

    if(isset($_SESSION['idUsuario'])){
        
        $id = $_SESSION['idUsuario'];
        $cpf = $_SESSION["cpfUsuario"];

        $sql = "SELECT * FROM view_func_user".
        " WHERE idUsuario = '".$id."' and cpf = '".$cpf."';";
        
        $sql_query = mysqli_query($conn, $sql);
        if(!$sql_query){
            $_SESSION["ERRO"] = "Ocorreu um erro ao recuperar o Usuario!";
            mysqli_close($conn);
            header("Location: ../erro/erro.php");
        }

        $dadosUsuario = mysqli_fetch_row($sql_query);

        $id = $dadosUsuario[0];
        $nome = $dadosUsuario[1];
        $dataNasc = $dadosUsuario[3];
        $sexo = $dadosUsuario[4];
        $login = $dadosUsuario[5];
        $senha = $dadosUsuario[6];

    }
?>