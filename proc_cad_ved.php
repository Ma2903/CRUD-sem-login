<?php
	session_start();
	include_once("conexao.php");
	
			$nome = $_POST['nome'];
			$telefone = $_POST['telefone'];
            $email = $_POST['email'];
			$cpf = $_POST['cpf'];
			$rg = $_POST['rg'];

		$sql = "INSERT INTO vendedores (ved_nome, ved_telefone, ved_email,  ved_cpf, ved_rg) VALUES
         ('$nome', '$telefone','$email', '$cpf', '$rg')";
		
		mysqli_query($conn,$sql);

		header("Location: vendedores.php");
?>			