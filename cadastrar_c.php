<?php
$ID_cliente = $_POST['ID_cliente'];
$nome_cliente = $_POST['nome_cliente'];
$sobrenome_cliente = $_POST['sobrenome_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];
$celular_cliente = $_POST['celular_cliente'];
$email_cliente = $_POST['email_cliente'];

require_once 'conexaoSql.php';
$connection = new $conexao();

$sql = "INSERT INTO cliente VALUES ($ID_cliente, $nome_cliente, $sobrenome_cliente, $cpf_cliente, $celular_cliente, $email_cliente)";
mysqli_query($conexao, $sql) or die("<br>Erro ao tentar cadastrar registro.<br>");

echo "<br>Cliente cadastrado com sucesso!<br>";