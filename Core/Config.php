<?php
session_start();
ob_start();

// define('URL', 'http://localhost/gerenciador/');

//Credenciais de acesso ao BD

define('HOST', 'localhost');
define('USER', 'mazera');
define('PASS', 'mazera');
define('DBNAME', 'gerenciador');
define('PORT', 3308);

try {
    $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
    //echo "<div class='alert alert-success' role='alert'>Conectado a " . DBNAME . " em " .HOST. " com sucesso.</div>";
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados:" . DBNAME . $pe->getMessage());
}
