<?php
	session_start();
	include_once("conexao.php");
	
        $cod = $_GET['id'];
		
        $sql = "DELETE FROM produtos WHERE prod_cod = $cod";
		mysqli_query($conn,$sql);

		header("Location: produtos.php");
?>		