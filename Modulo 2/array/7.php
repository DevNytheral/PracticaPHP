<?php

$grupoA = [3.5, 4.0, 2.8, 4.5, 3.9, 3.2, 4.1, 3.7, 4.3, 3.8];
$grupoB = [3.0, 3.6, 4.2, 4.4, 3.5, 3.9, 4.0, 3.7, 4.1, 3.8];

$sumaA = 0;
$sumaB = 0;

for ($i = 0; $i < count($grupoA); $i++) {
    $sumaA += $grupoA[$i];
}
$promedioA = $sumaA / count($grupoA);


for ($i = 0; $i < count($grupoB); $i++) {
    $sumaB += $grupoB[$i];
}
$promedioB = $sumaB / count($grupoB);


$promedioGeneral = ($sumaA + $sumaB) / (count($grupoA) + count($grupoB));

if ($promedioA > $promedioB) {
    $mejorGrupo = "Grupo A";
} elseif ($promedioB > $promedioA) {
    $mejorGrupo = "Grupo B";
} else {
    $mejorGrupo = "Ambos grupos tienen el mismo promedio";
}

echo "Promedio Grupo A: " . $promedioA . "<br>";
echo "Promedio Grupo B: " . $promedioB . "<br>";
echo "Promedio General: " . $promedioGeneral . "<br>";
echo "El grupo con mejor promedio es: " . $mejorGrupo;

?>