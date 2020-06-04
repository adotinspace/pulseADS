<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Área do Cliente - PulseADS</title>
        <link rel="stylesheet" href="consumo_style.css" type="text/css"/>
        <link rel="shortcut icon" href="midia/favicon2.ico" type="image/x-icon"/>
        <link rel="icon" href="midia/favicon2.ico" type="image/x-icon"/>
    </head>
    <body>
        <?php
        require_once 'conexaoSql.php';
        $connection = new $conexao();
        ?>
        <div id="cabecalho">
            <img id="logo" src="midia/bracelet.png" align="left" width="115" height="80"/>
            <h1>PulseADS</h1>
        </div>
        <div id="menu">
            <fieldset>
                <legend>Recarregue aqui sua pulseira RFID!</legend><br>
                <form id="opcaoRecarga" action="recarregar.php" method="post">
                <p>Informe o código de sua pulseira:</p><input type="text" id="cod" name="ID_pulseira"/><br>
                <p>Informe o valor a ser creditado:</p><input type="text" id="valor" name="valor_recarga"/><br>
                <div id="botoes">
                <input type="submit" value="Recarregar">
                </form>
                </div><br><br><br>
            </fieldset>
        </div>
        <footer id="rodape">
        <p>© NG</p>
        </footer>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>