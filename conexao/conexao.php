<?php
$servidor = "localhost";
$usuario  = "root";
$senha    = "1234";
$banco    = "api_pizzaria";
$conecta  = mysqli_connect($servidor,$usuario,$senha,$banco);
if(mysqli_connect_errno()){
    die("Falha no banco: " . mysqli_connect_errno);
}

?>
<!doctype html>
<html>
    <head>

    </head>
    <body>
       
    </body>
</html>
<?php //mysqli_close($conecta);//?>