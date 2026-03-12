<?php

$numero = 1234; 

if ($numero >= 0 && $numero <= 9) {
    echo "El número tiene 1 cifra";
} elseif ($numero >= 10 && $numero <= 99) {
    echo "El número tiene 2 cifras";
} elseif ($numero >= 100 && $numero <= 999) {
    echo "El número tiene 3 cifras";
} elseif ($numero >= 1000 && $numero <= 9999) {
    echo "El número tiene 4 cifras";
} else {
    echo "El número supera las 4 cifras o es negativo";
}

?>