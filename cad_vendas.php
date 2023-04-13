<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Página Cadastro Vendas </title>
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
				width: 45%;
                height: 94%;
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
	<form method="POST" action="proc_cad_vendas.php">
	<br>
		<h1> Cadastrar Venda </h1><br>
				<label> Código do cliente: </label>
				<input type="text" name="cli_cod" required placeholder="Selecione o código do cliente" onblur="troca(this.value)" list="ids_clientes">
				<datalist id="ids_clientes">
					<?php
						include_once("conexao.php");
						$sql = "SELECT cli_cod FROM clientes";
						$comando = mysqli_query($conn, $sql);
						while ($row_venda = mysqli_fetch_assoc($comando)) {
							echo "<option>".$row_venda['cli_cod']."<option>";
						}
					?>
				</datalist>
				<br><br>
				<label>Nome do cliente: </label>
				<input type="text" required id="cli_nome"><br><br>
            
				<label>Código do produto: </label>
				<input type="text" name="prod_cod" required placeholder="Selecione o código do produto" list="ids_prods" onblur="troca2(this.value)">
				<datalist id="ids_prods">
					<?php
						include_once("conexao.php");
						$sql = "SELECT prod_cod FROM produtos";
						$comando = mysqli_query($conn, $sql);
						while ($row_venda = mysqli_fetch_assoc($comando)) {
							echo "<option>".$row_venda['prod_cod']."<option>";
						}
					?>
				</datalist>
						<br><br>
				<label>Nome do produto: </label>
				<input type="text" required id="prod_nome">
						<br><br>
				<label>Quantidade do produto: </label>
				<input type="text" name="qtde" required placeholder="Digite a quantidade do produto">
						<br><br>
				<label>Código do vendedor: </label>
				<input type="text" name="ved_id" required placeholder="Selecione o código do vendedor"  onblur="troca3(this.value)" list="vend_ids">
				<datalist id="vend_ids">
					<?php
						include_once("conexao.php");
						$sql = "SELECT ved_id FROM vendedores";
						$comando = mysqli_query($conn, $sql);
						while ($row_venda = mysqli_fetch_assoc($comando)) {
							echo "<option>".$row_venda['ved_id']."<option>";
						}
					?>
				</datalist>
				<br><br>
				<label>Nome do vendedor: </label>
				<input type="text"required id="vend_nome">
						<br><br>
			<input type="submit" value="Cadastrar">
			<input type="reset" value="Limpar">
			<a href=index.php> Menu principal </a>
		</form>
		<?php
				include_once("conexao.php");
				$sql = "SELECT cli_nome,cli_cod FROM clientes";
				$comando = mysqli_query($conn, $sql);
				$array = [];
				$array2 = [];
				while ($row_venda = mysqli_fetch_assoc($comando)) {
					array_push($array,$row_venda['cli_nome']);
					array_push($array2,$row_venda['cli_cod']);
				}
				echo "
				<script>
					let array = ".json_encode($array)." 
					let array2 = ".json_encode($array2)."
					function troca(e){
						document.querySelector('#cli_nome').value = array[array2.indexOf(e)]
					}
				</script>
				
				"
			?>
				<?php
				include_once("conexao.php");
				$sql = "SELECT prod_nome,prod_cod FROM produtos";
				$comando = mysqli_query($conn, $sql);
				$array3 = [];
				$array4 = [];
				while ($row_venda = mysqli_fetch_assoc($comando)) {
					array_push($array3,$row_venda['prod_nome']);
					array_push($array4,$row_venda['prod_cod']);
				}
				echo "
				<script>
					let array3 = ".json_encode($array3)." 
					let array4 = ".json_encode($array4)."
					function troca2(e){
						document.querySelector('#prod_nome').value = array3[array4.indexOf(e)]
					}
				</script>
				
				"
				?>
				<?php
				include_once("conexao.php");
				$sql = "SELECT * FROM vendedores";
				$comando = mysqli_query($conn, $sql);
				$array5 = [];
				$array6 = [];
				while ($row_venda = mysqli_fetch_assoc($comando)) {
					array_push($array5,$row_venda['ved_nome']);
					array_push($array6,$row_venda['ved_id']);
				}
				echo "
				<script>
					let array5 = ".json_encode($array5)."
					let array6 = ".json_encode($array6)."
					function troca3(e){
						document.querySelector('#vend_nome').value = array5[array6.indexOf(e)]
					}
				</script>
				"
				?>
	</body>
</html>