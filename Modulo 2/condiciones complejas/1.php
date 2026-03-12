<?php

$edad = 22; 
if ($edad >= 0 && $edad <= 5) {
    echo "Categoría: Infante";
} elseif ($edad >= 6 && $edad <= 10) {
    echo "Categoría: Niño";
} elseif ($edad >= 11 && $edad <= 15) {
    echo "Categoría: Pre adolescente";
} elseif ($edad >= 16 && $edad <= 18) {
    echo "Categoría: Adolescente";
} elseif ($edad >= 19 && $edad <= 25) {
    echo "Categoría: Pre adulto";
} elseif ($edad >= 26 && $edad <= 40) {
    echo "Categoría: Adulto";
} elseif ($edad >= 41 && $edad <= 55) {
    echo "Categoría: Pre anciano";
} elseif ($edad >= 56) {
    echo "Categoría: Anciano";
} else {
    echo "Edad no válida";
}

?>