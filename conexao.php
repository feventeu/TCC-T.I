<?php
  $host="localhost";
  $senha="";
  $user="root";
  $banco="bancoadopt";

  $mysql = mysqli_connect($host, $user, $senha, $banco) 
	or die ("Problemas com a conexão do Banco de Dados");

  mysqli_set_charset($mysql,"utf8");
?>
