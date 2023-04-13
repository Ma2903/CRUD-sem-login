<?php
        session_start();
        include_once("conexao.php");
		
            $cod = $_POST['cli_cod'];
            $nome = $_POST['nome'];
			$telefone = $_POST['telefone'];
			$cpf = $_POST['cpf'];
			$datanascm = $_POST['datanascm'];
		
        $sql = "UPDATE clientes SET cli_nome='$nome', cli_fone='$telefone', cli_cpf='$cpf', cli_datanascm='$datanascm' WHERE cli_cod='$cod'";
        
         mysqli_query($conn,$sql);

         header("Location: cliente.php");
?>