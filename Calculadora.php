<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP Eq.05</title>
</head>
<body>
    <main>
        <div>
            <form action="" method="post">
                <label for="num01">Número 1:</label>
                <input type="number" name="num01" placeholder="Digite um número" id="num01">
                <select id="operacao">
                    <option value="adicao">+</option>
                    <option value="subtracao">-</option>
                    <option value="multiplicacao">*</option>
                    <option value="divisao">/</option>
                    <option value="potencia">^</option>
                    <option value="fatoracao">n!</option>
                </select>
                <label for="num02">Número 2:</label>
                <input type="number" name="num02" placeholder="Digite um número" id="num02">
                <button type="submit" name="calcular">Calcular</button>
            </form>
        </div>
    </main>
<?php 
include 'Funcoes.php';
?>
    
</body>
</html>