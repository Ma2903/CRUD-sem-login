<?php
	session_start();
	include_once("conexao.php");
	
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$quant = $_POST['quant'];
		$preco = $_POST['preco'];
			
		$sql = "INSERT INTO produtos (prod_nome, prod_descricao, prod_qtde, prod_preco) 
		VALUES ('$nome', '$descricao', '$quant', '$preco')";
		mysqli_query($conn,$sql);

		header("Location: produtos.php");
?>		