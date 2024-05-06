<?php 

if(isset($_POST['calcular'])) {
    $num01 = isset($_POST['num01']) ? intval($_POST['num01']) : 0;
    $num02 = isset($_POST['num02']) ? intval($_POST['num02']) : 0;
    $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : '';

    switch ($operacao) {
        case 'adicao':
            $resultado = $num01 + $num02;
            break;
        case 'subtracao':
            $resultado = $num01 - $num02;
            break;
        case 'multiplicacao':
            $resultado = $num01 * $num02;
            break;
        case 'divisao':
            if ($num2 === 0) {
                $resultado = 'Não é possível dividir por zero';
            } else {
                $resultado = $num1 / $num2;
            }
            break;
        case 'potencia':
            $resultado = pow($num1, $num2);
            break;
        case 'fatoracao':
            echo fatoracao($num01);
            break;
        default:
            echo "Selecione uma operação válida";
            break;
    }
}

function fatoracao($num01) {
    $fatores = array();
    for ($i = 1; $i <= $num01; $i++) {
        if ($num01 % $i === 0) {
            $fatores[] = $i;
        }
    }
    return implode(", ", $fatores);
}


?>
