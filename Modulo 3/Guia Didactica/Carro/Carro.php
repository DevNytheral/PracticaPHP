<?php

class Carro
{
    private $velocidad = 0;
    private $estadoCarro = "apagado";
    private $personas = 1;

    public function encender()
    {
        echo "Encendiendo el carro </br>";
        $this->estadoCarro = "encendido";
        echo "Carro encendido </br>";
    }

    public function frenar($rapidez)
    {
        echo "Frenando el carro </br>";
        $this->velocidad = $this->velocidad - $rapidez;
        echo "La velocidad del vehículo ahora es: " . $this->velocidad . "<br>";
    }

    public function apagar()
    {
        echo "Apagando el carro </br>";
        $this->estadoCarro = "apagado";
        echo "Carro apagado </br>";
    }

    public function acelerar($rapidez)
    {
        echo "Acelerando el carroo!!!! </br>";
        $this->velocidad = $this->velocidad + $rapidez;
        echo "Cuidado, la velocidad es: " . $this->velocidad . "</br>";
    }

    public function subirPasajero()
    {
        $this->personas++;
        echo "Tienes " . $this->personas . " pasajeros en el vehículo </br>";
    }

    public function choque()
    {
        if($this->velocidad >= 100)
        {
            echo "!!!!!!!!Accidente!!!!! </br>";
        }
    else if($this->velocidad > 80)
        {
            echo "Cuidado con las foto multas </br>";
        }
    }
}