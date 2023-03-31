<?php require_once("conexao/conexao.php");
$mensagem_enviada = "Mensagem enviada!";

?>

<html>
    <head>
        <title>Contato</title>
        <meta charset="UTF-8">
   <link href="public/_incluir/topoerodape.css" rel="stylesheet">
   <link href="public/_css/contato.css" rel="stylesheet">
    </head>
    <body>
       <?php  include_once("public/_incluir/topo.php");?>
            
            
           <div id="formulario_contato">
                <form action="" method="post" name="assunto">
                    <select name="assunto" required>
                        <option value="" selected="selected" disabled="disabled">Escolha uma opção</option>
                        <option value="contato">Contato</option>
                        <option value="informacoes">Informações</option>
                        <option value="pedidos">Pedidos</option>
                    </select>
                    <input type="text" name="nome" placeholder="nome" required>
                    <input type="email" name="email" id="email" placeholder="e-mail" required>
                    <textarea name="mensagem" rows="4" placeholder="Mensagem" required></textarea>
                    <input type="submit" value="Enviar"> 
                    <?php if(isset($_POST['assunto'])) {?>
                        <p><?php echo $mensagem_enviada ?></p>
                    <?php } ?>
                    
                </form>
            </div>
           
       <?php  include_once("public/_incluir/rodape.php");?>
    </body>
</html>