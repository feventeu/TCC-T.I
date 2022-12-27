<?php
	require_once('conexao.php');

	$email = $_POST['email'];

	$senha = $_POST['senha'];
    

	$sqlstring = "select * from cadastro_usu where email = '$email' and senha='$senha'";

	$info = mysqli_query($mysql, $sqlstring);

	if (!$info){die('<b>Registro Inválida: </b>' . mysqli_error($mysql));}

    $registro = mysqli_num_rows($info);	

	if($registro!=1){
		
        header("location:errocadastro2.php");
	}
	else
	{
		$dados = mysqli_fetch_array($info);	
		session_start();
		$_SESSION['id'] = $dados['id'];
        $_SESSION['email'] = $dados['email'];
		$_SESSION['nome'] = $dados['nome'];
		$_SESSION['log'] = 'ativo';
		$_SESSION['admin1'] = $dados['admin1'];	
			

        if($dados['admin1'] ==1) 
            header("location:pagina-adm.php");
        else
    		header("location:pagina-inicio.php");
	}
?>