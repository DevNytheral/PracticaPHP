<?php
function cuadrado($Valorlado) {
    $perimetro = 4 * $Valorlado;
    $area = $Valorlado * $Valorlado;
    echo "El perímetro del cuadrado es: $perimetro <br>";
    echo "El área del cuadrado es: $area <br>";
}

cuadrado(8);

echo "------------------------------ <br>";

function triangulo($Valorbase, $Valoraltura, $Valorladouno, $Valorladodos) {
    $perimetro = $Valorladouno + $Valorladodos + $Valorbase;
    $area = ($Valorbase * $Valoraltura) / 2;
    echo "El perímetro del triángulo es: $perimetro <br>";
    echo "El área del triángulo es: $area <br>";
}

triangulo(9, 8, 8, 8);

echo "------------------------------ <br>";

function rectangulo($Valorbase, $Valoraltura) {
    $perimetro = 2 * ($Valorbase + $Valoraltura);
    $area = $Valorbase * $Valoraltura;
    echo "El perímetro del rectángulo es: $perimetro <br>";
    echo "El área del rectángulo es: $area <br>";
}

rectangulo(8, 6)
?>
