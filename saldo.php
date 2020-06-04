<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Saldo - PulseADS</title>
        <link rel="stylesheet" href="saldo_style.css" type="text/css"/>
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
        ?>
        <div id="historico">
            <table>
                <caption>Histórico</caption>
                <tr>
                    <th>Data</th>
                    <th>Saldo</th>
                </tr>
                <tr>
                    <td></td>
                    <td>R$</td>
                </tr>
                <tr>
                    <td></td>
                    <td>R$</td>
                </tr>
                <tr>
                    <td></td>
                    <td>R$</td>
                </tr>
                <tr>
                    <td></td>
                    <td>R$</td>
                </tr>
            </table>
        </div>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>