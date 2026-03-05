<?php
/*
Determinar la longitud del siguiente mensaje: “Buenos días estimados
estudiantes. Hoy vamos aprender PHP”.
*/


function longitud_mensaje($mensaje){
    return strlen($mensaje);
}

echo(longitud_mensaje("Buenos días estimados
estudiantes. Hoy vamos aprender PHP"));

?>