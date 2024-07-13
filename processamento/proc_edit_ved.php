<?php
        session_start();
        include_once("conexao.php");
		
        $cod = $_POST['ved_id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];

        $sql = "UPDATE vendedores SET ved_nome='$nome', ved_telefone='$telefone',ved_email='$email', ved_cpf='$cpf', ved_rg='$rg' 
        WHERE ved_id='$cod'";
	
         mysqli_query($conn,$sql);

         header("Location: vendedores.php");
?>