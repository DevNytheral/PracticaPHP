<?php
"""
Dada la siguiente cadena “Diego-Palacio.5;28;41;08” remplace los
caracteres “-.;” de forma que la cadena termine de la siguiente forma:
“Diego Palacio 5284108”.
"""
$cadena = "Diego-Palacio.5;28;41;08";
$nueva = "";

for ($i = 0; $i < strlen($cadena); $i++) {
    $caracter = $cadena[$i];

    if ($caracter == "-") {
        $nueva .= " ";
    } elseif ($caracter == "." || $caracter == ";") {
    } else {
        $nueva .= $caracter;
    }
}

echo $nueva;

?>