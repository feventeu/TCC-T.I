<?php
    if(!empty($_GET[ 'id' ]))
    {
    include_once ('conexao.php');

        $id = $_GET ['id'];

        $sqlSelect="SELECT * FROM cadastro_usu WHERE id=$id";

        $resultado=$mysql->query($sqlSelect);

        if ( $resultado -> num_rows > 0 )
        {
            $sqlDelete = " DELETE FROM cadastro_usu WHERE id=$id";
            $resultadoDelete = $mysql -> query ( $sqlDelete ) ;

            header("Location: usuarios.php");
        }
    }
    ?>