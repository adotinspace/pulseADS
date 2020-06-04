<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Página Inicial - PulseADS</title>
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
                <legend>O que você deseja fazer?</legend><br>
                <div id="botoes">
                    <form id="opcaoPulseira" action="cad_pulseira.php"><input type="submit" value="Cadastrar Pulseira"></form>
                    <form id="opcaoFuncionario" action="cad_func.php"><input type="submit" value="Cadastrar Funcionário"></form>
                    <form id="opcaoCliente" action="cad_cliente.php"><input type="submit" value="Cadastrar Cliente"></form>
                    <div id="blank"></div>
                    <form id="opcaoSaldo" action="consumo.php"><input type="submit" value="Já sou cliente, quero acessar minha área"></form>
                    <div id="blank"></div>
                    <form id="opcaoRemovePulseira" action="remove_pulseira.php"><input type="submit" value="Remover Pulseira"></form>
                    <form id="opcaoRemoveFuncionario" action="remove_func.php"><input type="submit" value="Remover Funcionário"></form>
                    <form id="opcaoRemoveCliente" action="remove_cliente.php"><input type="submit" value="Remover Cliente"></form>
                </div><br><br><br>
            </fieldset>
        </div>
        <footer id="rodape">
            <p>© NG</p>
        </footer>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
