<?php

class Correo
{
    private $de;
    private $asunto;
    private $mensaje;
    private $para;

    public function setDe($de)
    {
        $this->de = $de;
    }

    public function getDe()
    {
        return $this->de;
    }

    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    }

    public function getAsunto()
    {
        return $this->asunto;
    }
}


?>