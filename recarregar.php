<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Recarga - PulseADS</title>
    <link rel="stylesheet" href="recarregar_style.css" type="text/css"/>
    <link rel="shortcut icon" href="midia/favicon2.ico" type="image/x-icon"/>
    <link rel="icon" href="midia/favicon2.ico" type="image/x-icon"/>
</head>
<body>
    <div id="cabecalho">
        <img id="logo" src="midia/bracelet.png" align="left" width="115" height="80"/>
        <h1>PulseADS</h1>
    </div>
    
        <?php
        require_once 'conexaoSql.php';
        $connection = new $conexao();
        
        $ID_pulseira = $_POST['ID_pulseira'];
        $valor_recarga = $_POST['valor_recarga'];
        $sql = "INSERT INTO pulseira VALUES ($ID_pulseira, $valor_recarga)";
        mysqli_query($conexao, $sql) or die("<br>Erro ao tentar cadastrar registro.<br>");
        ?>
    
    <div id="confirmacao">
        <h2>Recarga de R$<?php echo "$valor_recarga"?> realizada com sucesso para a pulseira #<?php echo "$ID_pulseira"?>!</h2><br><br>
        <img id="bag" src="midia/bag.png" class="centro"/><br>
        <h3>Pronto para as compras? &#128521;</h3>
    </div>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>