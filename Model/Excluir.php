<?php
/* Habilita a exibição de erros */
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once './../Core/Config.php';

$id = $_GET['id'];

$sql = "DELETE FROM operacoes WHERE id = :id";
$stmt = $conn->prepare( $sql );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();
 
if ( ! $result )
{
    var_dump( $stmt->errorInfo() );
    exit;
}

$_SESSION['msg'] = "<div class='alert alert-success'>" . $stmt->rowCount() . " linha removida com sucesso! </div>";
header('Location:./../Listar_Operacoes.php');