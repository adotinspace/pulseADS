<?php
$ID_func = $_POST['ID_func'];
$nome_func = $_POST['nome_func'];
$sobrenome_func = $_POST['sobrenome_func'];
$cpf_func = $_POST['cpf_func'];
$celular_func = $_POST['celular_func'];
$email_func = $_POST['email_func'];

require_once 'conexaoSql.php';
$connection = new $conexao();

$sql = "INSERT INTO funcionario VALUES ($ID_func, $nome_func, $sobrenome_func, $cpf_func, $celular_func, $email_func)";
mysqli_query($conexao, $sql) or die("<br>Erro ao tentar cadastrar registro.<br>");

echo "<br>Funcionário cadastrado com sucesso!<br>";

