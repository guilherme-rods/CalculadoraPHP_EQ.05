<?php 
session_start();
$resultado = '';
$historico = '';
if (!isset($_SESSION['historico'])) {
    $_SESSION['historico'] = [];
}

if(isset($_POST['calcular'])) {
    $num01 = floatval($_POST['num01']);
    $num02 = floatval($_POST['num02']);
    $operacao = $_POST['operacao'];
    $expressao = "";

    switch ($operacao) {
        case 'adicao':
            $resultado = $num01 + $num02;
            $expressao = "$num01 + $num02 = $resultado";
            break;
        case 'subtracao':
            $resultado = $num01 - $num02;
            $expressao = "$num01 - $num02 = $resultado";
            break;
        case 'multiplicacao':
            $resultado = $num01 * $num02;
            $expressao = "$num01 * $num02 = $resultado";
            break;
        case 'divisao':
            if ($num02 == 0) {
                $resultado = 'Divisão por zero não permitida';
            } else {
                $resultado = $num01 / $num02;
                $expressao = "$num01 / $num02 = $resultado";
            }
            break;
        case 'potencia':
            $resultado = pow($num01, $num02);
            $expressao = "$num01 ^ $num02 = $resultado";
            break;
        case 'fatoracao':
            $resultado = fatoracao($num01);
            $expressao = "Fatorial de $num01 é: $resultado";
            break;
    }
    $_SESSION['resultadoextenso'] = $expressao;
    $_SESSION['historico'][] = $expressao;
}

if(isset($_POST['salvar'])){
    $_SESSION['salvar'] = $_SESSION['resultadoextenso'];
}

if(isset($_POST['pegarvalores'])){
    $resultado = $_SESSION['salvar'] ?? '';
}

if(isset($_POST['M'])){
    if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
    $_SESSION['count']++;
    if ($_SESSION['count'] % 2 == 1) {
        $_SESSION['salvar'] = $_SESSION['resultadoextenso'];
    } else {
        $resultado = $_SESSION['salvar'];
    }
}

if(isset($_POST['ApagarHistorico'])){
    $_SESSION['historico'] = [];
}

function fatoracao($num) {
    if ($num < 0) return "Erro: Número negativo";
    $factorial = 1;
    for ($i = 2; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}
?>