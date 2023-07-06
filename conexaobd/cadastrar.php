<?php require_once("conexao/conexao.php");
    //insercao no banco
    if(isset($_POST["nome"])) {
        $nome               = $_POST["nome"];
        $endereco           = $_POST["endereco"];
        $email              = $_POST["email"];
        $telefone           = $_POST["telefone"];
        $data_nascimento    = $_POST["data_nascimento"];
        $usuario            = $_POST["usuario"];
        $senha              = $_POST["senha"];

        $inserir            = "INSERT INTO clientes ";
        $inserir            .= " (nomecliente, email, telefone, endereco_entrega, data_nascimento, usuario, senha) ";
        $inserir            .= " VALUES ('$nome','$endereco','$email','$telefone','$data_nascimento','$usuario','$senha')";
        
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if(!$operacao_inserir) {
            die("Falha no cadastro");
        }else{
            header("location:login.php");
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="public/_incluir/topoerodape.css" rel="stylesheet">
        <link href="public/_css/cadastrar.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once("public/_incluir/topo.php");?>
            <div id="cadastro">
                <form id="formulario" action="cadastrar.php" method="post">
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