<?php

function parImpar($numero){

    if ($numero % 2 == 0) {
        echo $numero . " es un número par";
    } else {
        echo $numero . " es un número impar";
    }

}

parImpar(7);

?>