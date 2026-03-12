<?php

$nacionalidad = "Italiano"; 
switch ($nacionalidad) {
    case "Colombiano":
        echo "La persona es Colombiano";
        break;
    case "Italiano":
        echo "La persona es Italiano";
        break;
    case "Argentino":
        echo "La persona es Argentino";
        break;
    case "Alemán":
        echo "La persona es Alemán";
        break;
    default:
        echo "Nacionalidad no especificada en la lista";
        break;
}

?>