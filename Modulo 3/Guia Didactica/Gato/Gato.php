<?php

class Gato
{
    private $raza;
    private $nombre;
    private $edad;
    private $encargada;

    public function __construct()
    {
        $raza = "Gato";
        $nombre = "Misifus";
        $edad = "8 años";
        $encargada = "Estefania";
    }

    public function tomarLeche()
    {
        echo "El gato está tomando leche";
    }
    public function pasear()
    {
        echo "Ir al parque";
    }
}

?>