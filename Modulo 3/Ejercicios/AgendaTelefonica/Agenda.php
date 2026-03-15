<?php

// Importo la clase contacto
require_once("Contacto.php");

// Clase Agenda para manejar los contactos
class Agenda{

    // Array de los contactos (10)
    private $contactos = [];

    // para registrar un contacto en la agenda
    public function registrarContacto($contacto){

        // que no se pasen de 10 contactos
        if(count($this->contactos) < 10){
            $this->contactos[] = $contacto;
        }else{
            echo "La agenda está llena <br>";
        }

    }

    // para mostrar todos los contactos
    public function listarContactos(){

        // Recorro el array de contactos
        foreach($this->contactos as $contacto){
            echo "Nombre: ".$contacto->getNombre()." - Numero: ".$contacto->getNumero()."<br>";
        }

    }

    // para buscar un contacto por nombre
    public function buscarContacto($nombre){

        // Recorro la agenda buscando el nombre
        foreach($this->contactos as $contacto){

            if($contacto->getNombre() == $nombre){
                echo "El numero de ".$nombre." es: ".$contacto->getNumero()."<br>";
                return;
            }

        }

        // Si no encuentra el contacto
        echo "Contacto no encontrado <br>";

    }

}

?>
