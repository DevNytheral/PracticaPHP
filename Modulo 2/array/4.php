<?php
/*
Desarrollar un programa que por medio de tres (3) arrays. Defina la
cantidad de datos por array.
-
Almacenar números pares aleatorios entre 0 y 100 en el primer
array.
-
Almacenar números impares aleatorios entre 0 y 50 en el segundo
array.-
Almacenar la suma de los valores de ambos arrays en el tercer
array
*/
$cantidad = 10;

$arrayPares = [];
$arrayImpares = [];
$arraySuma = [];

for ($i = 0; $i < $cantidad; $i++) {

    $numPar = rand(0, 50) * 2;
    $arrayPares[$i] = $numPar;
    $numImpar = rand(0, 24) * 2 + 1;
    $arrayImpares[$i] = $numImpar;

    $arraySuma[$i] = $arrayPares[$i] + $arrayImpares[$i];
}


echo "Array de pares:<br>";
foreach ($arrayPares as $valor) {
    echo $valor . " ";
}

echo "<br><br>Array de impares:<br>";
foreach ($arrayImpares as $valor) {
    echo $valor . " ";
}

echo "<br><br>Array suma:<br>";
foreach ($arraySuma as $valor) {
    echo $valor . " ";
}


?>