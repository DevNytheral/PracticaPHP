<?php

$numeros = [12, 7, 45, 23, 9, 50, 31];

$mayor = $numeros[0]; 

for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $mayor) {
        $mayor = $numeros[$i];
    }
}

echo "El número mayor es: " . $mayor;

?>