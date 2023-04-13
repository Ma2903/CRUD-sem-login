<?php
    session_start();
    include_once("conexao.php");

            $cod = $_GET['id'];

        $sql = "DELETE FROM clientes WHERE cli_cod = $cod";
    
		mysqli_query($conn,$sql);

		header("Location: cliente.php");
?>