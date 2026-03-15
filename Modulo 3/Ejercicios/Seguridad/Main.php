<?php

// Importo la clase Password
require_once("Password.php");

// Creo el objeto password con una longitud de 10
$password = new Password(10);

// Genero la contraseña
$password->generar();

// Muestro la contraseña generada
echo "Contraseña generada: ".$password->getPassword()."<br>";

// Valido si la contraseña es segura
$password->validar();

?>
