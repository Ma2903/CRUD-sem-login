<?php
	session_start();
	include_once("conexao.php");
	
			$cli_cod = $_POST['cli_cod'];
			$prod_cod = $_POST['prod_cod'];
			$qtde = $_POST['qtde'];
			$ved_id = $_POST['ved_id'];
			$preco = "";
			$quantidade_antes = 0;
			
		$sql = "SELECT * FROM produtos WHERE prod_cod = $prod_cod";

		$comando = mysqli_query($conn, $sql);

		while ($row_venda = mysqli_fetch_assoc($comando)) {
				$preco = $row_venda['prod_preco'];
				$quantidade_antes = $row_venda['prod_qtde'];
            }
		
		$quantidade_depois = $quantidade_antes - $qtde;

		$total = $preco * $qtde;

		$sql = "INSERT INTO vendas (cli_cod, prod_cod, prod_qtde, ved_id, data_venda,prod_preco,total_venda) VALUES ('$cli_cod', '$prod_cod', '$qtde', '$ved_id',NOW(),'$preco','$total')";

		mysqli_query($conn,$sql);

		$sql = "UPDATE produtos SET prod_qtde = $quantidade_depois WHERE prod_cod = $prod_cod";
		
		mysqli_query($conn,$sql);
		
		header("Location: vendas.php");	
?>		