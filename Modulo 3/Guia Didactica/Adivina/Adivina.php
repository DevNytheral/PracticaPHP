<?php

class Adivina
{
    private $numeroGenerado;
    private $numeroElegido;
    private $min;
    private $max;

    public function __construct($min, $max, $numeroElegido)
    {
        $this->min = $min;
        $this->max = $max;
        $this->numeroElegido = $numeroElegido;
        $this->verificar();
    }

    public function generarNumero()
    {
        return $this->numeroGenerado = rand($this->min, $this->max);
    }

    public function verificar()
    {
        if($this->numeroElegido > $this->max)
        {
            echo "El número es mayor al límite br>";
        }
        elseif ($this->numeroElegido < $this->min)
        {
            echo "El número es menor al límite br>";
        }
        elseif($this->generarNumero() == $this->numeroElegido)
        {
            echo "Haz acertado el número <br>";
        }
        else
        {
            $this->mostrarNumeroGenerado();
        }
    }

    public function mostrarNumeroGenerado()
    {
        echo "El número generado es: " . $this->numeroGenerado;
    }
}