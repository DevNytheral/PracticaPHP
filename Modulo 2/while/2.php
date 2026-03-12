<?php

$palabra = "reconocer";
$invertida = "";

$i = strlen($palabra) - 1;

while ($i >= 0) {
    $invertida .= $palabra[$i];
    $i--;
}

if ($palabra == $invertida) {
    echo "La palabra " . $palabra . " es palíndroma";
} else {
    echo "La palabra " . $palabra . " no es palíndroma";
}

?>