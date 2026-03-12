<?php

$palabra = "Programación";
$invertida = "";

$i = strlen($palabra) - 1;

while ($i >= 0) {
    $invertida .= $palabra[$i];
    $i--;
}

echo "Palabra invertida: " . $invertida;

?>