<?php

// Importo la clase Libro
require_once("Libro.php");

// Creo el primer objeto libro
$libro1 = new Libro("Gabriel Garcia Marquez","Cien años de soledad",482);

// Creo el segundo objeto libro
$libro2 = new Libro("J.K Rowling","Harry Potter",350);

// Muestro la información del primer libro
$libro1->mostrarLibro();

// Muestro la información del segundo libro
$libro2->mostrarLibro();

echo "<br>";

// Comparo los dos libros para saber cuál tiene más páginas
$libro1->compararLibros($libro2);

?>
