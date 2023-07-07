<?php require_once("conexao/conexao.php"); ?>
<html>
    <head>
        <title>Pizzaria</title>
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        
        <link href="public/_css/estilo.css"                    rel="stylesheet"/>
        <link href="public/_css/desktop-grande.css"           rel="stylesheet"/>
        
        
    </head>
    <body> 
        
        <nav>
            <img src="public/_img/logo-pizzaria-grande.png">
            <ul id="menu-desktop">
                <li><a href="listagem.php">PIZZAS</a></li>
                <li><a href="pedidos.php">MEUS PEDIDOS</a></li>
                <li><a href="contato.php">CONTATO</a></li>
                <li><a href="minhaconta.php">LOGIN</a></li>
            </ul> 
            
                        
            <div id="menu-btn">
                <svg width="30" height="30">
                    <path d="M0,5 30,5"     stroke="#fff" stroke-width="4"/>
                    <path d="M0,15 30,15"   stroke="#fff" stroke-width="4"/>
                    <path d="M0,25 30,25"   stroke="#fff" stroke-width="4"/>
                </svg>
            </div>            
        </nav>
        
        <header>
            
        </header>
        
        <main>
            <section id="apresentacao">
                <section class="pizzas">
                    <img src="public/_img/product_img/pizza1.jpg">
                    <h3>Margueritta</h3>
                    <p>Queijo, Tomate, Manjericão e Orégano</p>
                    <a href="detalhe.php?codigo=2">APENAS R$ 29,99</a>
                </section>

                <section class="pizzas centro">
                    <img src="public/_img/product_img/pizza2.jpg">
                    <h3>Calabresa</h3>
                    <p>Queijo, Calabresa, Cebola e Orégano</p>
                    <a href="detalhe.php?codigo=1">APENAS R$ 22,90</a>                    
                </section>

                <section class="pizzas direita">
                    <img src="public/_img/product_img/pizza4.jpg">
                    <h3>Brasileira</h3>
                    <p>Queijo, Presunto, Requeijão, Tomate e Orégano</p>
                    <a href= "detalhe.php?codigo=3">APENAS R$ 29,99</a>                
                </section>                
            </section>
        </main>      
        
        <script src="public/_js/jquery.js"></script>
        <script>
            $(function() {
                $("div#menu-btn").click(function() {
                    $("nav ul#menu-mobile").toggle();
                });
                
                $(window).resize(function() {
                   var largura = $(window).width(); 
                    if ( largura >= 701 ) {
                        $("nav ul#menu-mobile").hide();   
                    }
                });
            });
        </script>
    </body>
</html>