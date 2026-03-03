<?php
$numeroUno = 8;
$numeroDos = 2;

$numeroUno = &$numeroDos;

echo "El valor de numeroUno es: $numeroUno <br>";

echo "------------------------------ <br>";

$numeroUno = 8;

echo "El valor de numeroDos es: $numeroDos <br>";
?>



