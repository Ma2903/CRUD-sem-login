<?php
     session_start();// iniciando sessão para administrar as mensagens
     include_once("conexao.php");// incluindoaconexão comobanco de dados
     $cod = $_GET['id'];
     $sql= "SELECT * FROM produtos WHERE prod_cod = '$cod'";
     $comando=mysqli_query($conn,$sql);
     $row_produto=mysqli_fetch_assoc($comando);
 ?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Página Altera Produto </title>
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
	<form method="POST" action="proc_edit_produto.php">
	<input type="hidden"name="prod_cod"value="<?php echo $row_produto['prod_cod'];?>">
	<br>
		<h1> Alterar Produto </h1><br>
			<div><br>
				<label>Nome do produto: </label>
				<input type="text" name="nome" value="<?php echo$row_produto['prod_nome'];?>">
			</div>
            <div><br>
				<label>Descrição do produto: </label>
				<input type="text" name="descricao" value="<?php echo$row_produto['prod_descricao'];?>">
			</div>
			<div><br>
				<label>Quantidade do produto: </label>
				<input type="text" name="qtde" value="<?php echo$row_produto['prod_qtde'];?>">
			</div>
			<div><br>
				<label>Preço do produto: </label>
				<input type="text" name="preco" value="<?php echo$row_produto['prod_preco'];?>">
			</div><br>
			<input type="submit" value="Cadastrar">
			<input type="reset" value="Limpar"><br><br>
			<a href=index.php> Menu principal </a>
		</form>
		</div>
	</body>
</html>