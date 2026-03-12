<?php

$numero = 20;

echo "Los divisores de " . $numero . " son:<br>";

for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        echo $i . "<br>";
    }
}

?>