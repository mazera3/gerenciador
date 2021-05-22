<?php
/* Habilita a exibição de erros */
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once './../Core/Config.php';

$nome = $_POST["nome"];
$moedaOrigem = $_POST["moedaOrigem"];
$moedaDestino = $_POST["moedaDestino"];
$dataOperacao = $_POST["data"];
$valorOriginal = $_POST["valorOriginal"];
//$valorConvertido = $_POST["valorConvertido"];
$taxa = $_POST["taxa"];
$created = date('Y-m-d H:i:s');
if ($taxa != 0) {
    $valorConvertido = $valorOriginal / $taxa;
}else{
    $valorConvertido = $valorOriginal;
}

$sql = "INSERT INTO operacoes(nome,moeda_origem,moeda_destino,data_operacao,valor_original,valor_convertido,taxa,created) 
VALUES (:nome, :moeda_origem, :moeda_destino, :data_operacao, :valor_original, :valor_convertido, :taxa, :created)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':moeda_origem', $moedaOrigem);
$stmt->bindParam(':moeda_destino', $moedaDestino);
$stmt->bindParam(':data_operacao', $dataOperacao);
$stmt->bindParam(':valor_original', $valorOriginal);
$stmt->bindParam(':valor_convertido', $valorConvertido);
$stmt->bindParam(':taxa', $taxa);
$stmt->bindParam(':created', $created);

$result = $stmt->execute();

if (!$result) {
    var_dump($stmt->errorInfo());
    exit;
}

echo $stmt->rowCount() . "linhas inseridas";
header('Location:./../Listar_Operacoes.php');
