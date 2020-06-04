<?php
$ID_pulseira = $_POST['ID_pulseira'];
$saldo_pulseira = $_POST['saldo_pulseira'];
$data_recarga = $_POST['data_recarga'];

require_once 'conexaoSql.php';
$connection = new $conexao();

$sql = "INSERT INTO pulseira VALUES ($ID_pulseira, $saldo_pulseira, $data_recarga)";
mysqli_query($conexao, $sql) or die("<br>Erro ao tentar cadastrar registro.<br>");

echo "<br>Pulseira cadastrada com sucesso!<br>";