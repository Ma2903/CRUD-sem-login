<html>
<head>
    <meta charset='utf-8'>
    <title> Vendas </title>
    <style>
        *{
				font-size: 20px;
                margin: 0;
                margin-top: 20px;
                padding: 0;
				text-shadow: 1px 1px 1px rgba(0,0,0,3);
				font-style: italic;
            }
            a {
				color: #000;
                background-color: white;
				border: 3px solid #d7919d;
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
				background-color: #d7919d;
			}
            td {
                background-color: pink;
                padding: 8px;
                }
            .vendas{
                position: relative;
				top: 50%;
				transform: translateY(-50%);
				align-items: center;
				justify-content: center;
				display: flex;
				width: 70%;
                height: 60%;
                background-color:rgba(255, 255, 255, 0.726);
                border: 3px solid black;
                border-radius: 25px;
				box-shadow: 0 0 15px rgba(0,0,0,4);
                border-collapse: collapse;
                text-align: center;
                align-items: center;
            }
    </style>
</head>
<body>
        <a href=index.php> Menu principal </a>
        <a href=cad_vendas.php> Cadastrar nova venda </a>
    <div class="vendas">
        <table>
            <tr>
                <th>Código da venda</th>
                <th>Data da venda</th>
                <th>Total da venda</th>
                <th>Código do cliente</th>
                <th>Código do produto</th>
                <th>Quantidade do produto</th>
                <th>Preço do produto</th>
                <th>Código do vendedor</th>
            </tr>
            <?php
            session_start();
            include_once("conexao.php");
            $sql = "SELECT * FROM vendas";
            $comando = mysqli_query($conn, $sql);
            while ($row_venda = mysqli_fetch_assoc($comando))
            {
                $sql1 = "SELECT cli_nome FROM clientes WHERE cli_cod="+$row_venda['cli_cod'];
                $comando2 = mysqli_query($conn, $sql1);
                $data = explode("-", $row_venda['data_venda']);
                print_r($comando2);
                echo "<tr>";
                echo "<td>" . $row_venda['cod_venda'] . "</td>";
                echo "<td>" . $data[2] . "-" . $data[1] . "-" . $data[0] . "</td>";
                echo "<td>" . $row_venda['total_venda'] . "</td>";
                echo "<td>" . $row_venda['cli_cod'] . "</td>";
                echo "<td>" . $row_venda['prod_cod'] . "</td>";
                echo "<td>" . $row_venda['prod_qtde'] . "</td>";
                echo "<td>" . $row_venda['prod_preco'] . "</td>";
                echo "<td>" . $row_venda['ved_id'] . "</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </div>
</body>
</html>