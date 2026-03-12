<?php

function sumarNumeros($a, $b, $c, $d, $e){

    $suma = $a + $b + $c + $d + $e;

    return $suma;
}

$temporal = sumarNumeros(2, 5, 1, 8, 10);

echo "El resultado de la suma es: " . $temporal;

?>