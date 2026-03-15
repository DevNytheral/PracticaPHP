<?php

require_once('Casa.php');

$miCasita = new Casa(85000000, "Diego Palacio", true);
$precioCasita = $miCasita->aumentarPrecio(20000000);
$miCasita->cambiarPropietario("Carlos Palacio");
$estadoCasita = $miCasita->estadoCasa();

echo "El precio de la casita es: " . number_format($precioCasita) . " y " . $estadoCasita;
?>