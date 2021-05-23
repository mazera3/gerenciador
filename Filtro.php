<?php
/* Habilita a exibição de erros */
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
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
    $nome = filter_input(INPUT_POST, "nome");
    $data_operacao = filter_input(INPUT_POST, "data_operacao");
    ?>
    <div class="d-flex">
        <div class="mr-auto p-2">
            <h2 class="display-4 titulo">Filtrar</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome">
                    <input name="Nome" type="submit" class="btn btn-outline-primary" value="Buscar Nome">
                </div>
            </form>
        </div>
        <div class="col-6">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Data da Operacao</label>
                    <input type="text" name="data_operacao">
                    <input name="Data" type="submit" class="btn btn-outline-primary" value="Buscar Data">
                </div>
            </form>
        </div>
    </div>
    <?php
    $data_atual = date('Y-m-d');
    if ($nome) {
        $stmt = $conn->prepare("SELECT * FROM operacoes WHERE nome LIKE '%$nome%'");
        $stmt->execute();
    }
    if ($data_operacao) {
        $stmt = $conn->prepare("SELECT * FROM operacoes WHERE data_operacao BETWEEN '$data_operacao' AND '$data_atual'");
        $stmt->execute();
    }
    if (!$nome and !$data_operacao) {
        $stmt = $conn->prepare('SELECT * FROM operacoes');
        $stmt->execute();
    }
    ?>
    <table class="table table-striped mt-3">
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
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include_once './Core/Rodape.php';
?>