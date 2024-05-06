<?php 

if(isset($_POST['calcular'])) {
    $num01 = isset($_POST['num01']) ? intval($_POST['num01']) : 0;
    $num02 = isset($_POST['num02']) ? intval($_POST['num02']) : 0;
    $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : '';

    switch ($operacao) {
        case 'adicao':
            $resultado = $num01 + $num02;
            echo "Resultado:" . $resultado;
            break;
        case 'subtracao':
            $resultado = $num01 - $num02;
            echo "Resultado:" . $resultado;
            break;
        case 'multiplicacao':
            $resultado = $num01 * $num02;
            echo "Resultado:" . $resultado;
            break;
        case 'divisao':
            if ($num02 === 0) {
                $resultado = 'Não é possível dividir por zero';
            } else {
                $resultado = $num01 / $num02;  
            }
            echo "Resultado:" . $resultado;
            break;
        case 'potencia':
            $resultado = pow($num01, $num02);
            echo "Resultado:" . $resultado;
            break;
        case 'fatoracao':
            echo "Fatorial de $num01 é: " . fatoracao($num01);
            break;
        default:
            break;
    }
}

function fatoracao($num) {
    $fatores = array();
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i === 0) {
            $fatores[] = $i;
        }
    }
    return implode(", ", $fatores);
}


?>
