<?php

$num1 = 10;
$num2 = 5;


$operador = "*";

switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        echo "Resultado: $num1 + $num2 = $resultado";
        break;
    case '-':
        $resultado = $num1 - $num2;
        echo "Resultado: $num1 - $num2 = $resultado";
        break;
    case '*':
        $resultado = $num1 * $num2;
        echo "Resultado: $num1 * $num2 = $resultado";
        break;
    case '/':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            echo "Resultado: $num1 / $num2 = $resultado";
        } else {
            echo "Error: División entre cero no permitida";
        }
        break;
    case '%':
        if ($num2 != 0) {
            $resultado = $num1 % $num2;
            echo "Resultado: $num1 % $num2 = $resultado";
        } else {
            echo "Error: División entre cero no permitida";
        }
        break;
    default:
        echo "Operador no válido";
        break;
}

?>