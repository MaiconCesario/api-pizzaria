<?php require_once("conexao/conexao.php");?>
<html>
    <head>
        <Title>Entre em sua conta</Title>
        <meta charset="UTF-8">
        <link href="public/_incluir/topoerodape.css" rel="stylesheet">
        <link href="public/_css/minhaconta.css" rel="stylesheet">
    </head> 
    <body>
        <?php include_once("public/_incluir/topo.php");?>
       <!-- <section class="container">-->
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2>Já sou cadastrado</h2>
                    <p>Para fazer login, informe seu usário e senha</p>
                    <a href="http://localhost/conexaobd/login.php"><button>Login</button></a>
                </div>            
                <!--</section>-->
            
                <div class="col-5">
                    <h2>Ainda não tenho cadastro</h2>
                    <p>Cadastra-se de maneira simples e rápida!</p>
                    <a href="http://localhost/conexaobd/cadastrar.php"><button>Cadastrar-se</button></a>
                </div>
            </div>
        </div>    
        <!--</section>-->
        <?php include_once("public/_incluir/rodape.php");?>
    </body>
</html>