<?php

function volumenCilindro($radio, $altura){

    $volumen = pi() * $radio * $radio * $altura;

    return $volumen;
}

$resultado = volumenCilindro(5, 10);

echo "El volumen del cilindro es: " . $resultado;

?>