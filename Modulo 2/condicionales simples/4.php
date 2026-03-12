<?php

$num1 = 4; 
$num2 = 2; 

$mayor = ($num1 > $num2) ? $num1 : $num2;
$menor = ($num1 > $num2) ? $num2 : $num1;

$resultado = $mayor ** $menor;

echo "Número mayor: $mayor<br>";
echo "Número menor (como exponente): $menor<br>";
echo "Resultado de $mayor elevado a $menor: $resultado";

?>