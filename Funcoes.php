<?php
session_start();
$resultado = '';
$historico = '';
if (!isset($_SESSION['historico'])) {
    $_SESSION['historico'] = [];
 }
if (isset($_POST['calcular'])) {
    $num01 = floatval($_POST['num01']);
    $num02 = floatval($_POST['num02']);
    $operacao = $_POST['operacao'];
    $expressao = "";

    switch ($operacao) {
        case 'adicao':
            $op = '+';
            $resultado = $num01 + $num02;
            $expressao = "$num01 + $num02 = $resultado";
            break;
        case 'subtracao':
            $op = '-';
            $resultado = $num01 - $num02;
            $expressao = "$num01 - $num02 = $resultado";
            break;
        case 'multiplicacao':
            $op = '*';
            $resultado = $num01 * $num02;
            $expressao = "$num01 * $num02 = $resultado";
            break;
        case 'divisao':
            if ($num02 == 0) {
                $resultado = 'Divisão por zero não permitida';
            } else {
                $op = '/';
                $resultado = $num01 / $num02;
                $expressao = "$num01 / $num02 = $resultado";
            }
            break;
        case 'potencia':
            $op = '^';
            $resultado = pow($num01, $num02);
            $expressao = "$num01 ^ $num02 = $resultado";
            break;
        case 'fatoracao':
            $op = 'n!';
            $resultado = fatoracao($num01);
            $expressao = "Fatorial de $num01 é: $resultado";
            break;
            default:
            $op = '+';
            break;
    }
    
    $_SESSION['historico'][] = $expressao;
    $_SESSION['expressao'] = [$num01,$num02,$op,$operacao];
}

if (isset($_POST['salvar'])) {
    $_SESSION['salvar'] = $_SESSION['expressao'];
}

if (isset($_POST['pegarvalores'])) {
    $resultado1 = $_SESSION['salvar'] ?? '';
}

if (isset($_POST['M'])) {
    if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
    $_SESSION['count']++;
    if ($_SESSION['count'] % 2 == 1) {
        $_SESSION['salvar'] = $_SESSION['expressao'];
    } else {
        $resultado1 = $_SESSION['salvar'];
    }
}

if (isset($_POST['ApagarHistorico'])) {
    $_SESSION['historico'] = [];
    
}

function fatoracao($num){
    if ($num < 0) return "Erro: Número negativo";
    $factorial = 1;
    for ($i = 2; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}
