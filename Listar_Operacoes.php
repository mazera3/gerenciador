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
  <div class="d-flex">
    <div class="mr-auto p-2">
      <h2 class="display-4 titulo">Lista de Operações</h2>
    </div>
  </div>
  <?php
  $stmt = $conn->prepare('SELECT * FROM operacoes');
  $stmt->execute();
  ?>
  <table class="table table-striped">
    <thead>
      <tr class="text-center">
        <th>ID</th>
        <th>Nome</th>
        <th>moeda de origem</th>
        <th>moeda de destino</th>
        <th>data da operacao</th>
        <th>Valor Original</th>
        <th>Valor Convertido</th>
        <th>Taxa</th>
        <th>Criado</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = $stmt->fetch()) {
        echo '<tr class="text-center">';
        echo '<th scope="row">' . $row['id'] . '</th>';
        echo '<td>' . $row['nome'] . '</td>';
        echo '<td>' . $row['moeda_origem'] . '</td>';
        echo '<td>' . $row['moeda_destino'] . '</td>';
        echo '<td>' . $row['data_operacao'] . '</td>';
        echo '<td>' . $row['valor_original'] . '</td>';
        echo '<td>' . $row['valor_convertido'] . '</td>';
        echo '<td>' . $row['taxa'] . '</td>';
        echo '<td>' . $row['created'] . '</td>';
        echo "<td><a href='./Model/Excluir.php?id=". $row['id'] . "' class='btn btn-outline-danger btn-sm'>Apagar</a> '</td>";
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>
<?php
include_once './Core/Rodape.php';
?>