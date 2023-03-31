<?php require_once("conexao/conexao.php");?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="public/_incluir/topoerodape.css" rel="stylesheet">
        <link href="public/_css/cadastrar.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once("public/_incluir/topo.php");?>
        <div id="cadastro">
                <form method="post">
                    <h2>Tela de Cadastro</h2>
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="endereco" placeholder="Endereço">
                    <input type="text" name="email" placeholder="Email">
                    <input type="number" name="telefone" placeholder="Telefone">
                    <input type="date" name="data_nascimento" placeholder="Data de Nascimento">
                    <h2>Cadastre seu usário e senha de acesso</h2>
                    <input type="text" name="usuario" placeholder="Usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" value="Cadastrar">

                </form>
            </div>
        <?php include_once("public/_incluir/rodape.php");?>
    </body>
</html>