<?php

$numeros = [];
$mayor = 0;

for ($i = 0; $i < 10; $i++) {
    $numeros[$i] = rand(0, 50); 
    echo "Número generado en posición $i: " . $numeros[$i] . "<br>";

    if ($numeros[$i] > $mayor) {
        $mayor = $numeros[$i]; 
    }
}

echo "<br>El número mayor del array es: " . $mayor;

?>