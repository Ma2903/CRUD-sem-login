<?php
	session_start();
	include_once("conexao.php");
	
			$nome = $_POST['nome'];
			$telefone = $_POST['telefone'];
			$cpf = $_POST['cpf'];
			$datanascm = $_POST['datanascm'];
			
		$sql = "INSERT INTO clientes (cli_nome, cli_fone, cli_cpf, cli_datanascm) VALUES ('$nome', '$telefone', '$cpf', '$datanascm')";
		
		mysqli_query($conn,$sql);

		header("Location: cliente.php");
?>			