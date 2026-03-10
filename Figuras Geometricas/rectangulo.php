<?php


//Aprendiz:Camilo Aricapa 
//Aprendiz: Sergio Bermudez
//Ficha: 3230985

$matriz = [];

for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= 12; $j++){
        $matriz[$i][$j] = "*";
    }
}


for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= 12; $j++){
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

?>