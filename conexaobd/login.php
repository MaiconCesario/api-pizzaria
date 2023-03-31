<?php require_once("conexao/conexao.php");
session_start();
if(isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    $senha   = $_POST["senha"];

$login  = "SELECT * FROM clientes ";
$login .= " WHERE usuario = '{$usuario}' and '{$senha}'";

$acesso = mysqli_query($conecta,$login);
if(!$acesso){die("Falha no login");} 

$informacao = mysqli_fetch_assoc($acesso);
if(empty($informacao)){
    $mensagem = "login sem sucesso";
} else {
    $_SESSION["user_portal"] = $informacao["clienteID"];
    header("location:listagem.php");
}
}
?>
<html>
    <head>
        <link href="public/_incluir/topoerodape.css" rel="stylesheet">
        <link href="public/_css/login.css" rel="stylesheet">
        
    </head>
    <body>
        <?php include_once("public/_incluir/topo.php") ?>
        <main>
            <div id="janela_login">
                <form action="login.php" method="post">
                    <h2>Tela de login</h2>
                    <input type="text" name="usuario" placeholder="usuario">
                    <input type="password" name="senha" placeholder="senha">
                    <input type="submit" value="login">

                    <?php if(isset($mensagem)) {?>
                        <p><?php echo $mensagem ?></p>
                    <?php } ?>

                </form>
            </div>
        </main>
        <?php include_once("public/_incluir/rodape.php") ?>
    </body>
</html>