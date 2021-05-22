<?php
// Criar o banco de dados mysql com o nome: gerenciador
//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'gerenciador');
define('PORT', 3308);
// Criar tabela executanto o cript.
try {
    $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql para criar tabela
    $sql = "CREATE TABLE `operacoes` (
        `id` int NOT NULL,
        `nome` varchar(240) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `moeda_origem` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
        `moeda_destino` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
        `data_operacao` date DEFAULT NULL,
        `valor_original` decimal(10,2) DEFAULT NULL,
        `valor_convertido` decimal(10,2) DEFAULT NULL,
        `taxa` decimal(10,4) DEFAULT NULL,
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
