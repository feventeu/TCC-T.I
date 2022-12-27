<?php
  include_once('conexao.php');
 
	// recuperando
	$nome =   mysqli_real_escape_string($mysql, $_POST['nome']); 
	$email =  mysqli_real_escape_string($mysql, $_POST['email']);
	$senha =   mysqli_real_escape_string($mysql, $_POST['senha']);
	$telefone =  mysqli_real_escape_string ($mysql, $_POST['telefone']);			
	$endereco = mysqli_real_escape_string($mysql, $_POST['endereco']);	

	// criando a linha de INSERT
	$sqlinsert =  "INSERT INTO cadastro_usu (nome, email, senha, telefone, endereco) 
	values ( '$nome','$email', '$senha', '$telefone', '$endereco')";
	
	// executando instru��o SQL
	$resultado = mysqli_query($mysql, $sqlinsert);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'login-usuario.html'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . mysqli_error($mysql)); 
	} else {
		header("Location: registrousu.php");
	} 
	mysqli_close($mysql);

?>