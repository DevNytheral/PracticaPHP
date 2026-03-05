<?php
/*
Almacena todo tu nombre en un variable, por ejemplo: “DIEGO
ALEJANDRO PALACIO VALENCIA” y este mismo conviértelo a minúsculas
por medio de una función de cadenas.
*/

$Nombre = "Juan camilo Aricapa Garcia";

function minuscula($dato){
    return strtolower($dato);
}

echo(minuscula($Nombre));
?>