<html>
<head>
    <meta charset='utf-8'>
    <title> Clientes </title>
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
            .clientes{
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
            input {
				border-radius: 5px;
				padding: 6px;
				border: 3px solid #d7919d;
				border-radius: 20px;
			}
			input:hover {
  			box-shadow: 0 0 10px rgba(0,0,0,4);
			}
			input:focus {
			background-color: #d7919d;
			}
    </style>
</head>
<body>
    <form method="POST">
			Nome: <input type=text name=nome> 
        <input type=submit name=submit value=Consultar><br><br>
        <a href=index.php> Menu principal </a>
        <a href=cad_cliente.php> Cadastrar novo cliente </a>
	</form>
    <div class="clientes" id="clientes">
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Data de nascimento</th>
                <th colspan="2"> Manutenção do cliente</th>
            </tr>
            <?php
            session_start();
            include_once("conexao.php");

            // Define a consulta padrão
            $sql = "SELECT * FROM clientes";

            if (isset($_POST['submit'])) {
                $nome = $_POST['nome'];

                // Verifica se o nome é válido
                if (!empty($nome)) {
                    // Altera a consulta para filtrar por nome
                    $sql = "SELECT * FROM clientes WHERE cli_nome LIKE '%$nome%'";
                }
            }

            $comando = mysqli_query($conn, $sql);

            while ($row_cliente = mysqli_fetch_assoc($comando)) {
                $data = explode("-", $row_cliente['cli_datanascm']);
                echo "<tr>";
                echo "<td>" . $row_cliente['cli_cod'] . "</td>";
                echo "<td>" . $row_cliente['cli_nome'] . "</td>";
                echo "<td>" . $row_cliente['cli_fone'] . "</td>";
                echo "<td>" . $row_cliente['cli_cpf'] . "</td>";
                echo "<td>" . $data[2] . "-" . $data[1] . "-" . $data[0] . "</td>";
                echo "<td><a href='edit_cliente.php?id=" . $row_cliente['cli_cod'] . "'>Editar</a></td>";
                echo "<td><a href='proc_delete_cliente.php?id=" . $row_cliente['cli_cod'] . "'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
        </table>
    </div>
</body>
</html>