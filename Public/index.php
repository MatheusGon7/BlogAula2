<?php
include "./../App/configuracao.php";
include "./../App/autoload.php";

// $db = new DataBase();
// $usuario_id = 10;
// $titulo = "A volta de quem não foi";
// $texto = "A volta de quem não foi é uma obra";

// $sql = "INSERT INTO posts(post_usua_id,post_titulo,post_texto) VALUES(:usua_id,:titulo,:texto)";

// $db->query($sql);
// $db->bind(":usua_id",$usuario_id);
// $db->bind(":titulo",$titulo);
// $db->bind(":texto",$texto);
// $db->executa();

// echo "<hr>Total Resultados: ".$db->totalResultados();
// echo "<hr>Ultimo id inserido: ".$db->ultimoIdInserido();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/style.css"/>
    <link rel="stylesheet"  type="text/css" href="<?=URL?>/public/bootstrap/css/bootstrap.css">
</head>
<body>
    <?php
     include("../App/Views/header.php");
    $rotas = new Rota();
   // $rotas->url();
   include("../App/Views/footer.php");
   
    ?>
    <script src="<?=URL?>/public/bootstrap/js/bootstrap.js"></script>
    <script src="<?=URL?>/public/js/query.js"></script>
</body>
</html>