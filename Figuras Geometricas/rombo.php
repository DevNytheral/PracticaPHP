<?php

//Aprendiz:Camilo Aricapa 
//Aprendiz: Sergio Bermudez
//Ficha: 3230985

$matriz = [];

for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= 5; $j++){
        $matriz[$i][$j] = "&nbsp;";
    }
}

for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= 5; $j++){

        if ($j == 1 and $i == 3){
            $matriz[$i][$j] = "*";
        }

        elseif ($j == 2 and ($i == 2 or $i == 3 or $i == 4)){
            $matriz[$i][$j] = "*";
        }

        elseif ($j == 3){
            $matriz[$i][$j] = "*";
        }

        elseif ($j == 4 and ($i == 2 or $i == 3 or $i == 4)){
            $matriz[$i][$j] = "*";
        }

        elseif ($j == 5 and $i == 3){
            $matriz[$i][$j] = "*";
        }

    }
}

for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= 5; $j++){
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

?>