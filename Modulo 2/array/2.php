<?php
/*
Imprime el siguiente array usando la estructura cíclica foreach:
$arrayName[4] = 80;
$arrayName[9] = “Hola”;
$arrayName[22] = 99;
$arrayName[156] = “Mundo;
*/

$arrayName[4] = 80;
$arrayName[9] = "Hola";
$arrayName[22] = 99;
$arrayName[156] = "Mundo";

foreach ($arrayName as $indice => $valor) {
    echo("Indice: " . $indice . " Valor: " . $valor . "<br>");
}
?>
