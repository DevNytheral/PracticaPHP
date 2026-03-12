<?php

$notas = [3.5, 4.2, 2.8, 3.9, 4.5, 1.9, 3.0, 4.8, 2.5, 3.7];

$i = 0;
$suma = 0;
$mayor = $notas[0];
$menor = $notas[0];
$aprobados = 0;
$reprobados = 0;

while ($i < count($notas)) {

    $suma += $notas[$i];

    if ($notas[$i] > $mayor) {
        $mayor = $notas[$i];
    }

    if ($notas[$i] < $menor) {
        $menor = $notas[$i];
    }

    if ($notas[$i] >= 3) {
        $aprobados++;
    } else {
        $reprobados++;
    }

    $i++;
}

$promedio = $suma / count($notas);

echo "Promedio del grupo: " . $promedio . "<br>";
echo "Nota mayor: " . $mayor . "<br>";
echo "Nota menor: " . $menor . "<br>";
echo "Estudiantes aprobados: " . $aprobados . "<br>";
echo "Estudiantes reprobados: " . $reprobados;

?>