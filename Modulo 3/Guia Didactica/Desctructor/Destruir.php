<?php
class Destruir
{
    private $nombreDestruccion;
    public function __construct()
    {
        echo "En el constructor <br>";
    }
    public function asignarNombre($nombreDestruccion)
    {
        $this->nombreDestruccion = $nombreDestruccion;
    }
        public function mostrarDestruccion()
    {
        echo $this->nombreDestruccion . "<br>";
    }
    public function __destruct() {
        echo "Destruyendo Objeto";
    }
}