<?php require_once("conexao/conexao.php"); ?>

<?php
   session_start();

    if(!isset($_SESSION["user_portal"])){
        header("location:login.php");
    }
    setlocale(LC_ALL, 'pt_BR');

    $produtos = "SELECT pizzaID, sabores, preco, imagemproduto, imagempequena FROM pizzas";
    
    if ( isset($_GET["produto"]) ) {
        $nome_produto = $_GET["produto"];
        $produtos .= " WHERE sabores LIKE '%{$nome_produto}%' ";
    }
    $resultado = mysqli_query($conecta, $produtos);
    if(!$resultado) {
        die("Falha na consulta ao banco");   
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizzaria</title>
        
        <!-- estilo -->
        
        <link href="public/_css/produtos.css" rel="stylesheet">
        <link href="public/_css/produto_busca.css" rel="stylesheet">
        <link href="public/_incluir/topoerodape.css" rel="stylesheet">
        
    </head>

    <body>
        <?php include_once("public/_incluir/topo.php"); ?>
        <?php include_once("public/_incluir/funcoes.php"); ?>
        

        
        <main>
            <div id="janela_pesquisa">
                <form action="listagem.php" method="get">
                    <input type="text" name="produto" placeholder="Pesquisa">
                    <input type="image"  src="public/_img/pesquisar.png">
                </form>
            </div>
            
            <div id="listagem_produtos"> 
            <?php
                while($linha = mysqli_fetch_assoc($resultado)) {
            ?>
                <ul>
                    <li class="imagem">
                        <a href="detalhe.php?codigo=<?php echo $linha['pizzaID'] ?>">
                            <img src="<?php echo $linha["imagempequena"] ?>">
                        </a>
                    </li>
                    <li><h3><?php echo $linha["sabores"] ?></h3></li>
                    <li>Preço unitário : <?php echo real_format($linha["preco"]) ?></li>
                </ul>
             <?php
                }
            ?>           
            </div>
            
        </main>

        <?php include_once("public/_incluir/rodape.php"); ?>  
    </body>
</html>
