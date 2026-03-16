<?php

require_once("Banco.php");

$N1 = new cuentaBancaria("camilo", 1000000, 1020);

echo $N1->getTitular();
$N1->setTitular("juan");
echo $N1->getTitular();

?>