<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <section>
            <h1>Feliz Páscoa</h1>
            <section class="secmenu">
                <button id="btnmenu" onclick="open_menu()"> Menu </button>
            </section>
        </section>
    </header>

    <section class="menu" id="menu">
        <section class="conteudo" id="conteudo">
            <h1>Menu</h1>
            <section class="butoes">
                <section class="nomebtn"><a href="cliente.php">Clientes</a></section>
            </section>
            <section class="butoes">
                <section class="nomebtn"><a href="produtos.php">Produtos</a></section>
            </section>
            <section class="butoes">
                <section class="nomebtn"><a href="vendedores.php">Vendedores</a></section>
            </section>
            <section class="butoes">
                <section class="nomebtn"><a href="vendas.php">Vendas</a></section>
            </section>
        </section>
    </section>

    <script>
        function open_menu() {
            document.getElementById("menu").classList.toggle("ativo");
            document.getElementById("conteudo").classList.toggle("ativo");
        }
    </script>
</body>
</html>