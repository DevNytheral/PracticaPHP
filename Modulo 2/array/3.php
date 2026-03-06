<?php
/*
Crear un array asociativo para los siguientes datos:
Nombre: Juan Orozco
Dirección: Crra 48 A # 22
Teléfono: 3215489621
*/
$persona = [
    "Nombre" => "Juan Orozco",
    "Direccion" => "Crra 48 A # 22",
    "Telefono" => 3215489621
];

foreach ($persona as $clave => $valor){
    echo($clave. " : ". $valor. "<br>");
}


?>