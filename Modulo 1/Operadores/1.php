<?php

$Estudiante = "Camilo";
$notas = [5, 4, 3, 2, 1];

$Suma = 0;
foreach ($notas as $nota) {
    $Suma += $nota;
};
$Promedio = $Suma / 5;  

echo "El promedio de $Estudiante es: $Promedio";


?>