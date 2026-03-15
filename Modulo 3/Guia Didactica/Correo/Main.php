<?php

require_once('Correo.php');

$CorreoGmail = new Correo();

$CorreoGmail->setDe("diego@gmail.com");
echo 'De: ' . $CorreoGmail->getDe() . '<br>';

$CorreoGmail->setAsunto("Invitación - Familiar");
echo 'Asunto: ' . $CorreoGmail->getAsunto() . '<br>';

$CorreoGmail->setMensaje("Hola, los invito a la cena familiar");
echo 'Mensaje: ' . $CorreoGmail->getMensaje() . '<br>';

$CorreoGmail->setPara("papa@gmail.com, mama@gmail.com, hermano@gmail.com");
echo 'Para: ' . $CorreoGmail->getPara() . '<br>';

?>
