<?php
  include_once('conexao.php');
 
	// cadastro
	$nome =   mysqli_real_escape_string($mysql, $_POST['nome']); 
	$descricao =   mysqli_real_escape_string($mysql, $_POST['descricao']);
	$raca =  mysqli_real_escape_string ($mysql, $_POST['raca']);			
		

		//imagem
		$image_name = $_FILES['imagem']['name'];
		$image = $_FILES['imagem']['tmp_name'];
	
		$location = './animals/'.$image_name;
		move_uploaded_file($image, $location);

	// criando a linha de INSERT
	$sqlinsert =  "INSERT INTO cadastro_ani (nome, descricao, raca, imagem) 
	values ( '$nome', '$descricao', '$raca', '$image_name')";
	
	// executando instru��o SQL
	$resultado = mysqli_query($mysql, $sqlinsert);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'pagina-adm.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . mysqli_error($mysql)); 
	} else {
		header("Location: registroani.php");
	} 
	mysqli_close($mysql);

?>