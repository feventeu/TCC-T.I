<?php
  include_once('conexao.php');
 
	// recuperando
	$nome =   mysqli_real_escape_string($mysql, $_POST['nome']); 
	$cidade =  mysqli_real_escape_string($mysql, $_POST['cidade']);			
	$telefone = mysqli_real_escape_string($mysql, $_POST['telefone']);	
	$cpf = mysqli_real_escape_string($mysql, $_POST['cpf']);
	$renda = mysqli_real_escape_string($mysql, $_POST['renda']);
	$pet = mysqli_real_escape_string($mysql, $_POST['pet']);

	// criando a linha de INSERT
	$sqlinsert =  "INSERT INTO mensagem (nome, cidade, telefone, cpf, renda, pet) 
	values ( '$nome','$cidade', '$telefone', '$cpf', '$renda', '$pet')";
	
	// executando instru��o SQL
	$resultado = mysqli_query($mysql, $sqlinsert);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'login-usuario.html'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . mysqli_error($mysql)); 
	} else {
		header("Location: registromensa.php");
	} 
	mysqli_close($mysql);

?>