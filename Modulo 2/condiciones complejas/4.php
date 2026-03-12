<?php

$totalPreguntas = 40;      
$preguntasCorrectas = 28;   


$porcentaje = ($preguntasCorrectas / $totalPreguntas) * 100;

if ($porcentaje >= 90) {
    echo "Nivel máximo: $porcentaje%";
} elseif ($porcentaje >= 75 && $porcentaje < 90) {
    echo "Nivel medio: $porcentaje%";
} elseif ($porcentaje >= 50 && $porcentaje < 75) {
    echo "Nivel regular: $porcentaje%";
} else {
    echo "Fuera de nivel: $porcentaje%";
}

?>