<html>
<head>
    <meta charset='utf-8'>
    <title> Nome </title>
     <style>
          *{
				font-size: 20px;
                margin: 0;
                padding: 0;
				text-shadow: 1px 1px 1px rgba(0,0,0,3);
				font-style: italic;
            }
            h1 {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 35px;
            }
            header{
                box-shadow: 0 2px 4px rgba(0,0,0,4);
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #ea88a7;
                width: 100%;
                height: 22%;
             }
            body{
                background-image: url(fundo.png);
                background-size: 100%;
            }
            header div{
                width: 33%;
                height: 100%;
                flex-direction: column;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .cima{
                display: flex;
                justify-content: center;
                align-items: end;
            }
            #btnmenu{
                width: 25%;
                height: 50%;
                background-color:rgba(255, 255, 255, 0.726);
                border: 3px solid  #aed6e9;
                border-radius: 25px;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .menu{
                width: 0%;
                height: 85%;
                background: #f0bdc9;
                border-top-right-radius: 25px;
                border-bottom-right-radius: 25px;
                display: flex;
                justify-content: center;
                top: 0%;
                left: 0%;
                align-items: center;
                flex-direction: column;
                position: absolute;
                z-index: 20;
                animation: menu_fechar 300ms ease;
            }
            .menu.ativo{
                top: 0%;
                left: 0%;
                display: block;
                width: 18%;
                height: 100%;
                background: #f0bdc9;
                border-top-right-radius: 25px;
                border-bottom-right-radius: 25px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                position: absolute;
                z-index: 20;
                animation: menu_abrir 800ms ease;
            }
            .conteudo{
                display: none;
            }
            .conteudo.ativo{
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                text-align: center;
                justify-content: center;
                flex-direction: column;
            }
            @keyframes menu_abrir{
                0%{width:0%}
                100%{width:18%}
            }
            @keyframes menu_fechar{
                0%{width:18%}
                100%{width:0%}
            }
            .butoes{
                width: 90%;
                height: 20%;
                background-image: url(chocolat.jpg);
                background-size: 100%;
                margin: 4%;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .nomebtn{
                width: 95%;
                height: 80%;
                background-color: rgba(255, 255, 255, 0.726);
                border-radius: 30px;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
            }
    </style>
        </head>
        <body>
    <header>
            <div>

            </div>
            <div>
                <h1> Feliz Páscoa </h1>
             </div>

            <div class="cima">
                <button id="btnmenu" onclick="open_menu()"> Menu </button>
            </div>
    </header>

    <div class="menu" id="menu">
        <div class="conteudo" id="conteudo">
            <h1>Menu</h1>
            <div class="butoes">
                <div class="nomebtn">
                    <a href="cliente.php"> Clientes </a>
                </div>
            </div>
            <div class="butoes">
                <div class="nomebtn">
                    <a href="produtos.php"> Produtos </a>
                </div>
            </div>
            <div class="butoes">
                <div class="nomebtn">
                    <a href="vendedores.php"> Vendedores </a>
                </div>
            </div>
            <div class="butoes">
                <div class="nomebtn">
                    <a href="vendas.php"> Vendas </a>
                </div>
            </div>
        </div> 
    </div>
        <script>
            function open_menu(){
                document.getElementById("menu").classList.toggle("ativo")
                document.getElementById("conteudo").classList.toggle("ativo")
            }
        </script>
</body>
</html>