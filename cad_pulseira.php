
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Cadastrar Pulseira - PulseADS</title>
        <link rel="stylesheet" href="index_style.css" type="text/css"/>
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
                <legend>Cadastro de Pulseira</legend><br>
                    <form name="cadastroPulseira" action="cadastrar_p.php" method="post">
                        Código: <input type="text" name="ID_pulseira"><br>
                        Saldo Inicial: <input type="text" name="saldo_pulseira"><br>
                        Data da Recarga: <input type="date" name="data_recarga"><br><br><br><br>
                        <input type="submit" value="Cadastrar">
                    </form>
            </fieldset>
        </div>
        <footer id="rodape">
            <p>© NG</p>
        </footer>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
