<?php

function calcularIVA($totalProducto, $iva = 10){

    $valorIVA = $totalProducto * ($iva / 100);

    return $valorIVA;
}

$totalIVA1 = calcularIVA(200);
echo "IVA a pagar (10% por defecto): " . $totalIVA1 . "<br>";

$totalIVA2 = calcularIVA(200, 15);
echo "IVA a pagar (15% aplicado): " . $totalIVA2;

?>