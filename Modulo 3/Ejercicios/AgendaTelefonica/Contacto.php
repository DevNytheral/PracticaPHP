<?php

// Clase Contacto para guardar la información de cada contacto
class Contacto{

    // Atributos del contacto
    private $nombre;
    private $numero;

    // Constructor 
    public function __construct($nombre,$numero){
        $this->nombre = $nombre;
        $this->numero = $numero;
    }

    // Getter del nombre
    public function getNombre(){
        return $this->nombre;
    }

    // Setter del nombre
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    // Getter del numero
    public function getNumero(){
        return $this->numero;
    }

    // Setter del numero
    public function setNumero($numero){
        $this->numero = $numero;
    }

}

?>
