<?php 

$resultado = 0;
if(isset($_POST['calcular'])) {
    $num01 = $_POST['num01'];
    $num02 = $_POST['num02'] ;
 

    switch ($_POST['operacao']) {
        case 'adicao':
            $resultado = $num01 + $num02;

            $_SESSION['resultadoextenso']=  "<br>".$num01." + ". $num02 ." = " .$resultado;
          
            echo " <br>Resultado:" . $resultado;
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
if(isset($_POST['salvar'])){
    $_SESSION['salvar'] = $_SESSION['resultadoextenso'];
}
if(isset($_POST['pegarvalores'])){
echo $_SESSION['salvar'];
}

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
if (isset($_POST['M'])) {
    $_SESSION['count']++;
    if ($_SESSION['count'] % 2 == 1) {
        $_SESSION['salvar'] = $_SESSION['resultadoextenso'];
    } else {
        echo $_SESSION['salvar'];
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
