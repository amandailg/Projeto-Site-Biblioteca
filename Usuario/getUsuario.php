<?php include_once("../include/conexao.php"); ?>

        <?php
            $sql = "select * from view_func_user";

            // executa SQL
            $resultado = mysqli_query($conn, $sql);

            // transforma em Array por meio de apontamento
            while($row = $resultado -> fetch_array()){
                $rows[] = $row;
            }
?>
            
        <?php
            //fecha a conexão
            mysqli_close($conn);

        ?>
