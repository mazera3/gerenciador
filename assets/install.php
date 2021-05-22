<?php
// Criar o banco de dados mysql com o nome: gerenciador
// Criar tabela executanto o cript.
try {
    $conn = new PDO("mysql:host=HOST;dbname=DBNAME", "USER", "PASS");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql para criar tabela
    $sql = "CREATE TABLE `operacoes` (
        `id` int NOT NULL,
        `nome` varchar(240) COLLATE utf8mb4_unicode_ci NOT NULL,
        `moeda_origem` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
        `moeda_destino` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
        `data_operacao` datetime NOT NULL,
        `valor_original` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
        `valor_convertido` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
        `taxa` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
        `created` timestamp NOT NULL,
        `modified` timestamp NULL DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Tabela criada com sucesso";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
