
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Remover Cliente - PulseADS</title>
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
                <legend>Descadastro de Cliente</legend><br>
                    <form>
                        Código: <input type="text"><br>
                        Nome: <input type="text"><br>
                        Sobrenome: <input type="text"><br>
                        CPF: <input type="text"><br><br><br>
                        <input type="submit" value="Remover">
                    </form>
            </fieldset>
        </div>
        <footer id="rodape">
            <p>© NG</p>
        </footer>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
