<?php require_once("conexao/conexao.php");
session_start();

if ( isset($_GET["codigo"]) ) {
    $pizza_id = $_GET["codigo"];
} else {
    Header("Location: inicial.php");
}

$consulta  = "SELECT * FROM pizzas ";
$consulta .= " WHERE pizzaID = {$pizza_id}";
$detalhe   = mysqli_query($conecta, $consulta);
if(!$detalhe){
    die("Falha na consulta ao banco");
} else {
    $dados_detalhe  = mysqli_fetch_assoc($detalhe);
    $pizzaID        = $dados_detalhe["pizzaID"];
    $pizza_sabores  = $dados_detalhe["sabores"];
    $descricao      = $dados_detalhe["descricao"];
    $preco          = $dados_detalhe["preco"];
    $imagem_produto = $dados_detalhe["imagemproduto"];
}

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detalhe do Produto</title>
        <link href="public/_css/produto_detalhe.css" rel="stylesheet">
        <link href="public/_incluir/topoerodape.css" rel="stylesheet">

    </head>
    <body>
      <header><?php include_once("public/_incluir/topo.php");?></header>
             <?php include_once("public/_incluir/funcoes.php");?>

             <main>
                <div id=detalhe_produto>
                <ul>
                    <li class="imagem"><img src="<?php echo $imagem_produto ?>"></li>
                    <li><h2><?php echo $pizza_sabores ?></h2></li>
                    <li><b>Descrição: </b><?php echo $descricao ?></li>
                    <li><b>Preço: </b><?php echo $preco ?></li>
                </ul>
            </main>
        </div>

            <?php require_once("public/_incluir/rodape.php") ?>     
    </body>
</html>