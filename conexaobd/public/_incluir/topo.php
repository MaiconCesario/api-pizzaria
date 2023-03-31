<header>
        <div id="header_central">
        <?php 
               if(isset($_SESSION["user_portal"])){
                     $user = $_SESSION["user_portal"];
                     $saudacao = " SELECT nomecliente FROM clientes ";
                     $saudacao .= " WHERE clienteID = {$user}";
                     $saudacao_login = mysqli_query($conecta,$saudacao);
                     if(!$saudacao_login){
                        die("Falha no banco de dados");

                     }
                    $saudacao_login = mysqli_fetch_assoc($saudacao_login);
                    $nome = $saudacao_login["nomecliente"];

                 ?>
                 <div id="header_saudacao">
                    <h5><b>Seja bem vindo, <?php echo $nome ?> | <a href="index.php"> Home</a> | <a href="pedidos.php">Meus pedidos</a> | <a href="logout.php">Sair</a></b></h5>
                    </div>
            <?php }?>
            <a href="../../conexaobd/index.php"><img src="public/_img/logo-pizzaria-pequeno.png"></a>
        </div>
       
</header>
        
