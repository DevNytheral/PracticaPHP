<?php
/*
 A partir de la contraseña: “dapv0102”, cifrar la misma con sha1 y md5,
mostrar ambos resultados.
*/
$Contraseña = "dapv0102";
echo sha1($Contraseña);
echo ("<br>");
echo md5($Contraseña);
?>