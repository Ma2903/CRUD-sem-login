<?php
     session_start();// iniciando sessão para administrar as mensagens
     include_once("conexao.php");// incluindoaconexão comobanco de dados
     $cod = $_GET['id'];
     $sql= "SELECT * FROM vendedores WHERE ved_id = '$cod'";
     $comando=mysqli_query($conn,$sql);
     $row_ved=mysqli_fetch_assoc($comando);
 ?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Página Altera Vendedor </title>
		<style>
				*{
				font-size: 20px;
                margin: 0;
                padding: 0;
				text-shadow: 1px 1px 1px rgba(0,0,0,3);
				font-style: italic;
            }
			a {
				color: #000;
				border: 3px solid #aed6e9;
				border-radius: 20px;
				padding: 5px;
			}
			a:hover {
				cursor: pointer;
  				box-shadow: 0 0 10px rgba(0,0,0,4);
			}
			h1{
				font-size: 35px;
			}
			body{
				display: flex;
				align-items: center;
				justify-content: center;
				background: linear-gradient(to bottom, #1f8dc0, #aed6e9);
			}
			.form{
				position: relative;
				top: 50%;
				transform: translateY(-50%);
				align-items: center;
				justify-content: center;
				display: flex;
				width: 42%;
                height: 92%;
                background-color:rgba(255, 255, 255, 0.726);
                border: 3px solid black;
                border-radius: 25px;
				box-shadow: 0 0 15px rgba(0,0,0,4);
                text-align: center;
                align-items: center;
			}
			input {
				border-radius: 5px;
				padding: 6px;
				border: 3px solid #aed6e9;
				border-radius: 20px;
			}
			input:hover {
  			box-shadow: 0 0 10px rgba(0,0,0,4);
			}
			input:focus {
			background-color: #aed6e9;
			}
			</style>
        </head>
	<body>
		<div class="form">
	<form method="POST" action="proc_edit_ved.php">
	<input type="hidden"name="ved_id"value="<?php echo $row_ved['ved_id'];?>">
	<br>
		<h1> Alterar Vendedor </h1><br>
			<div><br>
				<label>Nome do vendedor: </label>
				<input type="text" name="nome" value="<?php echo$row_ved['ved_nome'];?>">
			</div>
            <div><br>
				<label>Telefone do vendedor: </label>
				<input type="text" name="telefone" value="<?php echo$row_ved['ved_telefone'];?>">
			</div>
            <div><br>
				<label>E-mail do vendedor: </label>
				<input type="text" name="email" value="<?php echo$row_ved['ved_email'];?>">
			</div>
			<div><br>
				<label>CPF do vendedor: </label>
				<input type="text" name="cpf" value="<?php echo$row_ved['ved_cpf'];?>">
			</div>
            <div><br>
				<label>RG do vendedor: </label>
				<input type="text" name="rg" value="<?php echo$row_ved['ved_rg'];?>">
			</div><br>
			<input type="submit" value="Cadastrar">
			<input type="reset" value="Limpar"><br><br>
			<a href=index.php> Menu principal </a>
		</form>
	</div>
	</body>
</html>