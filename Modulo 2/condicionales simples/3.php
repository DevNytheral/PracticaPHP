<?php

$num1 = 4; 
$num2 = 2; 


if ($num1 > $num2) {
    $mayor = $num1;
    $menor = $num2;
} elseif ($num2 > $num1) {
    $mayor = $num2;
    $menor = $num1;
} else {
    echo "Los números son iguales, la potencia será $num1 elevado a $num2<br>";
    $resultado = $num1 ** $num2;
    echo "Resultado: $resultado";
    exit; 
}


$resultado = $mayor ** $menor;

echo "Número mayor: $mayor<br>";
echo "Número menor (como exponente): $menor<br>";
echo "Resultado de $mayor elevado a $menor: $resultado";

?>