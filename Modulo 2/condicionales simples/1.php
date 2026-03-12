<?php

$numero = rand(1, 100);

echo "Número generado: $numero<br>";


if ($numero < 50) {
    echo "El número es menor a 50";
} elseif ($numero > 50) {
    echo "El número es mayor a 50";
} else {
    echo "El número es exactamente 50";
}

?>