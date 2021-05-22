<?php
include_once 'Core/Nave.php';
include_once 'Core/Header.php';
?>
<div class="container">
    <div class="form-row mt-5">
        <div class="col-md-10" style="background-color: #ccfcfc">
            <h1>Cadastro</h1>
            <form method="POST" action="./Model/Cadastrar.php">
                <div class="form-row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Cliente</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome completo" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Data</label>
                            <input type="text" class="form-control" name="data" value="<?php echo date('Y-m-d') ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Moeda de origem</label>
                        <select class="custom-select" name="moedaOrigem" id="origem">
                            <option selected>Moeda de origem</option>
                            <option value="Real (BRL)">Real (BRL)</option>
                            <option value="Dolar (USD)">Dolar (USD)</option>
                            <option value="Renminbi (CNY)">Renminbi (CNY)</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Valor Original</label>
                        <input type="text" class="form-control" name="valorOriginal" value="0.00" onchange="this.value = this.value.replace(/,/g, '.')">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Taxa Cobrada</label>
                            <input type="text" class="form-control" name="taxa" value="0.00" id="taxa" onchange="this.value = this.value.replace(/,/g, '.')">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Moeda de destino</label>
                        <select class="custom-select" name="moedaDestino" id="destino">
                            <option selected>Moeda de destino</option>
                            <option value="Real (BRL)">Real (BRL)</option>
                            <option value="Dolar (USD)">Dolar (USD)</option>
                            <option value="Renminbi (CNY)">Renminbi (CNY)</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Valor Convertido</label>
                        <input type="text" class="form-control" name="valorConvertido" value="" disabled>
                    </div>
                </div>
                <input name="Cadastrar" type="submit" class="btn btn-primary mt-3" value="Enviar Cadastro">
            </form>
        </div>
    </div>
</div>
<?php
include_once 'Core/Rodape.php';
?>
</body>

</html>