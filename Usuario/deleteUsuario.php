<?php
    session_start();
    include_once("../include/conexao.php");

    if(isset($_GET["id"])){

        $id = $_GET["id"];
        $sql = "DELETE FROM usuario WHERE idUsuario = '".$id."';";

        // echo $sql;

        if(mysqli_query($conn, $sql)){
            mysqli_close();
            header("Location:cliente.php");
        } else {
            mysqli_close($conn);
            $_SESSION["ERRO"] = "Ocorreu um erro ao Remover o Cliente!";
            header("Location: ../erro/erro.php");
        }
    }

?>