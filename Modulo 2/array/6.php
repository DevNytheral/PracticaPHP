<?php

$pesos = [65.5, 72.3, 58.4, 80.2, 69.7];

$suma = 0;

for ($i = 0; $i < count($pesos); $i++) {
    $suma = $suma + $pesos[$i];
}

$promedio = $suma / count($pesos);

$mayores = 0;
$menores = 0;


for ($i = 0; $i < count($pesos); $i++) {
    if ($pesos[$i] > $promedio) {
        $mayores++;
    } else if ($pesos[$i] < $promedio) {
        $menores++;
    }
}

echo "Promedio de peso: " . $promedio . "<br>";
echo "Personas que superan el promedio: " . $mayores . "<br>";
echo "Personas inferiores al promedio: " . $menores;

?>