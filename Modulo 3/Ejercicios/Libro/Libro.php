<?php

// Clase Libro para guardar información de un libro
class Libro{

    // Atributos del libro
    private $autor;
    private $titulo;
    private $paginas;

    // Constructor para los datos del libro
    public function __construct($autor,$titulo,$paginas){
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->paginas = $paginas;
    }

    // Getter del autor
    public function getAutor(){
        return $this->autor;
    }

    // Setter del autor
    public function setAutor($autor){
        $this->autor = $autor;
    }

    // Getter del titulo
    public function getTitulo(){
        return $this->titulo;
    }

    // Setter del titulo
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    // Getter de paginas
    public function getPaginas(){
        return $this->paginas;
    }

    // Setter de paginas
    public function setPaginas($paginas){
        $this->paginas = $paginas;
    }

    // Método para mostrar la información del libro
    public function mostrarLibro(){
        echo "El libro ".$this->titulo.", del autor ".$this->autor.", tiene ".$this->paginas." páginas <br>";
    }

    // Método para comparar dos libros y ver cuál tiene más páginas
    public function compararLibros($libro2){

        // Comparo las páginas del libro actual con el otro libro
        if($this->paginas > $libro2->getPaginas()){
            echo "El libro con más páginas es: ".$this->titulo;
        }else{
            echo "El libro con más páginas es: ".$libro2->getTitulo();
        }
    }

}

?>
