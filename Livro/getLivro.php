<?php 
    include_once("../include/conexao.php");

    $sql = "select * from livro";

    // executa SQL
    $resultado = mysqli_query($conn, $sql);

    // transforma em Array por meio de apontamento
    while($row = $resultado -> fetch_array()){
        $rows[] = $row;
    }
    //fecha a conexão
    mysqli_close($conn);

?>
