<?php
if (!isset($_SESSION)) {session_start();}
/* Habilita a exibição de erros */
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

include_once 'Core/Config.php';
include_once 'Core/Nave.php';
include_once 'Core/Header.php';
?>
<span id="msg"></span>
<div class="container">
    <div class="row">
        <div class="col-sm mt-3">
            <p><b>O DESAFIO:</b> Considere os seguintes critérios fictícios para desenvolver sistema
                Gerenciador de Operações:</p>
            <p>Crie um sistema que permita o controle de operações. O cadastro deverá conter os seguintes dados:</p>
            <ul class="list-group">
                <li>nome do cliente</li>
                <li>moeda de origem</li>
                <li>moeda de destino</li>
                <li>data da operação</li>
                <li>valor original</li>
                <li>valor convertido</li>
                <li>taxa cobrada</li>
            </ul><br />
        </div>
        <div class="col-sm mt-3">
            <p>O sistema fornecerá os seguintes relatórios:</p>
            <ul class="list-group">
                <li>lista de operações</li>
                <li>valor total das operações</li>
                <li>valor total das taxas cobradas</li>
            </ul>
            <p>Os relatórios poderão ser filtrados por intervalo de tempo e
                cliente. O valor de conversão de cada moeda para Reais poderá ser
                definido no código-fonte ou cadastrado pelo usuário do sistema.
                O cadastro de valores de conversão garantirá pontos extras na
                avaliação.</p>
        </div>
    </div>
</div>
<?php
include_once 'Core/Rodape.php';
