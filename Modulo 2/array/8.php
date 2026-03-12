<?php

$palabra = "Colombia";

$tamano = strlen($palabra); 
$letras = [];

for ($i = 0; $i < $tamano; $i++) {
    $letras[$i] = $palabra[$i];
}

for ($i = 0; $i < $tamano; $i++) {
    echo "Posicion " . $i . ": " . $letras[$i] . "<br>";
}

?>