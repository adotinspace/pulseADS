
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Cadastrar Cliente - PulseADS</title>
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
                <legend>Cadastro de Cliente</legend><br>
                    <form name="cadastroCliente" action="cadastrar_c.php" method="post">
                        Código: <input type="text" name="ID_cliente"><br>
                        Nome: <input type="text" name="nome_cliente">&nbsp;&nbsp;&nbsp;
                        Sobrenome: <input type="text" name="sobrenome_cliente"><br>
                        CPF: <input type="text" name="cpf_cliente"><br>
                        Celular: <input type="text" name="celular_cliente"><br>
                        Email: <input type="text" name="email_cliente"><br><br><br><br>
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
