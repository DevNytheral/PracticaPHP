<?php

$num1 = 12;
$num2 = 25;
$num3 = 18;


if ($num1 >= $num2 && $num1 >= $num3) {
    echo "El número mayor es: " . $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "El número mayor es: " . $num2;
} else {
    echo "El número mayor es: " . $num3;
}

?>