<?php

$tipoMotor = 2; 

switch ($tipoMotor) {
    case 0:
        echo "No hay establecido un valor definido para el tipo";
        break;
    case 1:
        echo "Agua";
        break;
    case 2:
        echo "Gasolina";
        break;
    case 3:
        echo "Hormigón";
        break;
    default:
        echo "No existe un valor válido";
        break;
}

?>