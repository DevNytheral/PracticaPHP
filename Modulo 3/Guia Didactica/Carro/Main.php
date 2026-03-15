<?php
require_once('Carro.php');
$Mazda3 = new Carro();
$Mazda3->encender();
$Mazda3->subirPasajero();
$Mazda3->subirPasajero();
$Mazda3->acelerar(30);
$Mazda3->frenar(30);
$Mazda3->apagar();
$Mazda3->subirPasajero();
$Mazda3->encender();
$Mazda3->acelerar(40);
$Mazda3->frenar(10);
$Mazda3->acelerar(20);
$Mazda3->choque();
$Mazda3->frenar(10);
$Mazda3->choque();
$Mazda3->acelerar(20);
$Mazda3->choque();


?>