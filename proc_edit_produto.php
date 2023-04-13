<?php
        session_start();
        include_once("conexao.php");
		
        $cod = $_POST['prod_cod'];
        $nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$quant = $_POST['qtde'];
		$preco = $_POST['preco'];
		
        $sql = "UPDATE produtos SET prod_nome='$nome', prod_descricao='$descricao', prod_qtde='$quant', prod_preco='$preco' WHERE prod_cod='$cod'";
	
         mysqli_query($conn,$sql);

         header("Location: produtos.php");
?>