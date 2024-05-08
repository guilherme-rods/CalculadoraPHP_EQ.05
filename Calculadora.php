<?php
include './Funcoes.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./calculadora.css">
    <title>Calculadora PHP Eq.05</title>

</head>

<body>
    <main>
        <form action="" method="post">
            <div class="input-group">
                <input type="number" name="num01" placeholder="Digite um número" value="<?= $resultado1[0] ?? '' ?>" id="num01">
                <select id="operacao" name="operacao">
                    <option value="<?= $resultado1[3] ?? '+' ?>"><?= $resultado1[2] ?? 'Operador' ?></option>
                    <option value="adicao">+</option>
                    <option value="subtracao">-</option>
                    <option value="multiplicacao">*</option>
                    <option value="divisao">/</option>
                    <option value="potencia">^</option>
                    <option value="fatoracao">n!</option>
                </select>

                <input type="number" name="num02" placeholder="Digite um número" value="<?= $resultado1[1] ?? '' ?>" id="num02">
                <button type="submit" name="M" id="btn-M">M</button>
            </div>


            <div class="additional-buttons">
                <button type="submit" name="calcular" id="btn-calcular">Calcular</button>

                <button type="submit" name="salvar" id="btn-salvar">Salvar</button>
                <button type="submit" name="pegarvalores" id="btn-exibir">Exibir Salvo</button>
                <button type="submit" name="ApagarHistorico" id="btn-apagar">Apagar Histórico</button>
            </div>
        </form>
        <div class="history">
            <strong>Histórico de Cálculos:</strong>
            <div class="history-content">
                <?php foreach ($_SESSION['historico'] as $item) {
                    echo "<div>" . htmlspecialchars($item) . "</div>";
                } ?>
            </div>
        </div>
    </main>
</body>

</html>