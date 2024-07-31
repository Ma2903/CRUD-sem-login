<!DOCTYPE html>
<html lang="pt-br" class="theme-dark">
<head>
    <meta charset="UTF-8">
    <title>Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar background" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <figure class="image is-96x96">
        <img class="navbar-item" src="./src/logotipo.png"> </img>
    </figure>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item">
        Sobre Nós
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Menu
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            Clientes
          </a>
          <a class="navbar-item">
            Produtos
          </a>
          <a class="navbar-item">
            Vendedores
          </a>
          <a class="navbar-item">
            Vendas
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

    <script>
        function open_menu() {
            document.getElementById("menu").classList.toggle("ativo");
            document.getElementById("conteudo").classList.toggle("ativo");
        }
    </script>
</body>
</html>