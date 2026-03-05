<?php
/*
Almacena todo tu nombre en un variable, por ejemplo: “diego alejandro
palacio valencia” y este mismo conviértelo a mayúscula por medio de una
función de cadenas.
*/

$Nombre = "Juan camilo Aricapa Garcia";

function mayuscula($dato){
    return strtoupper($dato);
}

echo(mayuscula($Nombre));
?>