<?php 
include './Funcoes.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP Eq.05</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="number"], select, button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        label, .result, .history {
            margin-top: 15px;
            display: block;
        }
        button {
            background-color: #5c67f2;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #4a54e1;
        }
        .history {
            margin-top: 30px;
            background: #eef;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <main>
        <div>
            <form action="" method="post">
                <label for="num01">Número 1:</label>
                <input type="number" name="num01" placeholder="Digite um número" value="<?=$resultado1[0]?? ''?>" id="num01">
                <select id="operacao" name="operacao">
                    <option value="<?=$resultado1[3]?? '' ?>"><?=$resultado1[2]?? '' ?></option>
                    <option value="adicao">+</option>
                    <option value="subtracao">-</option>
                    <option value="multiplicacao">*</option>
                    <option value="divisao">/</option>
                    <option value="potencia">^</option>
                    <option value="fatoracao">n!</option>
                </select>
                <label for="num02">Número 2:</label>
                <input type="number" name="num02" value="<?=$resultado1[1]?? ''?>" id="num02">
                <button type="submit" name="calcular">Calcular</button>
                <button type="submit" name="salvar">Salvar</button>
                <button type="submit" name="pegarvalores">Exibir Salvo</button>
                <button type="submit" name="M">M</button>
                <button type="submit" name="ApagarHistorico">Apagar Histórico</button>
                <div class="result">Resultado: <?= htmlspecialchars($resultado) ?></div>
            </form>
            <div class="history">
                <strong>Histórico de Cálculos:</strong>
                <?php foreach ($_SESSION['historico'] as $item) {
                    echo "<div>" . htmlspecialchars($item) . "</div>";
                } ?>
            </div>
        </div>
    </main>
</body>
</html>
