<?php

	include "conexaoprova.php";
	
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	
	$sql = "INSERT INTO usuarios (nome, senha, nome_pet, idade_pet) VALUES ('$nome', '$senha', '$nome_pet', '$idade_pet')";
	
	mysqli_query($connect, $sql) or die(error());
	
	$response = array("success" => true);
	
	echo json_encode($response);
	
?>

