<?php

$horasTrabajadas = 45; 
$horasNormales = 40;  


if ($horasTrabajadas > $horasNormales) {
    $horasExtras = $horasTrabajadas - $horasNormales;
    echo "La persona tuvo horas extras: $horasExtras horas";
} elseif ($horasTrabajadas == $horasNormales) {
    echo "La persona no tuvo horas extras, trabajó exactamente las horas normales";
} else {
    echo "La persona trabajó menos que las horas normales";
}

?>