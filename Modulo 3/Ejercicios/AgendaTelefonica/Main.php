<?php

// Importo las clases
require_once("Contacto.php");
require_once("Agenda.php");

// Creo la agenda
$agenda = new Agenda();

// Creo algunos contactos
$contacto1 = new Contacto("Juan","3001234567");
$contacto2 = new Contacto("Maria","3019876543");
$contacto3 = new Contacto("Pedro","3025554444");

// Registro los contactos en la agenda
$agenda->registrarContacto($contacto1);
$agenda->registrarContacto($contacto2);
$agenda->registrarContacto($contacto3);

echo "<h3>Lista de contactos</h3>";

// Muestro todos los contactos
$agenda->listarContactos();

echo "<br>";

// Busco un contacto por nombre
echo "<h3>Buscar contacto</h3>";
$agenda->buscarContacto("Maria");

?>
