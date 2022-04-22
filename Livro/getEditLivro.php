<?php
    include_once("../include/conexao.php");

    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "SELECT * FROM livro".
        " WHERE idLivro = '".$id."';";

        // echo $sql;

        $sql_query = mysqli_query($conn, $sql);

        if(!$sql_query){
            $_SESSION["ERRO"] = "Ocorreu um erro ao recuperar o Cliente!";
            mysqli_close($conn);
            header("Location: ../erro/erro.php");
        }

        $dadosCliente = mysqli_fetch_row($sql_query);

        $id = $dadosCliente[0];
        $titulo = $dadosCliente[1];
        $autor = $dadosCliente[2];
        $editora = $dadosCliente[3];
        $publicacao = $dadosCliente[4];
        $edicao = $dadosCliente[5];
        $exemplar = $dadosCliente[6];
        $isbn = $dadosCliente[7];

    }
?>