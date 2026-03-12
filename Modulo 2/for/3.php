<?php

$numero = 6;
$suma = 0;

for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        $suma += $i;
    }
}

if ($suma == $numero) {
    echo $numero . " es un número perfecto";
} else {
    echo $numero . " no es un número perfecto";
}

?>