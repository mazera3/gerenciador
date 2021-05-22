<?php
include_once './Core/Nave.php';
include_once './Core/Header.php';
include_once './Core/Config.php';
?>
<div class="container mt-3">
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>
  <div class="container">
    <div class="d-flex">
      <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Total de Operações</h2>
      </div>
    </div>
    <?php

    $sql = "SELECT SUM(valor_original) AS original FROM operacoes";
    $sql = $conn->prepare($sql);
    $sql->execute(array());
    $row = $sql->fetch();
    $original = $row['original'];

    $sql = "SELECT SUM(valor_convertido) AS convertido FROM operacoes";
    $sql = $conn->prepare($sql);
    $sql->execute(array());
    $row = $sql->fetch();
    $convertido = $row['convertido'];

    $sql = "SELECT SUM(taxa) AS taxa FROM operacoes";
    $sql = $conn->prepare($sql);
    $sql->execute(array());
    $row = $sql->fetch();
    $taxa = $row['taxa'];
    ?>
    <h3>Valor Original: <?php echo $original ?></h3>
    <h3>Valor Convertido: <?php echo $convertido ?></h3>
    <h3>Taxas: <?php echo $taxa ?></h3>
  </div>
  <?php
  include_once 'Core/Rodape.php';
  ?>