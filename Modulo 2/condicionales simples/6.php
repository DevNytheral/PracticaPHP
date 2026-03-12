<?php

$num1 = 12; 
$num2 = 3;  

if ($num2 != 0 && $num1 % $num2 == 0) {
    echo "$num1 es múltiplo de $num2";
} elseif ($num1 != 0 && $num2 % $num1 == 0) {
    echo "$num2 es múltiplo de $num1";
} else {
    echo "Ninguno de los números es múltiplo del otro";
}

?>