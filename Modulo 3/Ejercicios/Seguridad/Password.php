<?php

// Clase Password para generar y validar contraseñas
class Password{

    // Atributos
    private $longitud;
    private $password;

    // Constructor para inicializar la longitud
    public function __construct($longitud){
        $this->longitud = $longitud;
    }

    // Getter de longitud
    public function getLongitud(){
        return $this->longitud;
    }

    // Setter de longitud
    public function setLongitud($longitud){
        $this->longitud = $longitud;
    }

    // Getter del password
    public function getPassword(){
        return $this->password;
    }

    // generar la contraseña usando ASCII
    public function generar(){

        // contraseña vacía
        $this->password = "";

        for($i = 0; $i < $this->longitud; $i++){

            $tipo = rand(1,3);

            if($tipo == 1){
                // Genera minúscula (ASCII 97 - 122)
                $this->password .= chr(rand(97,122));
            }
            elseif($tipo == 2){
                // Genera mayúscula (ASCII 65 - 90)
                $this->password .= chr(rand(65,90));
            }
            else{
                // Genera número (ASCII 48 - 57)
                $this->password .= chr(rand(48,57));
            }

        }

    }

    ///Verificarrr
    public function validar(){

        $numeros = 0;
        $minusculas = 0;
        $mayusculas = 0;

        // Recorrer la contraseña
        for($i = 0; $i < strlen($this->password); $i++){

            $caracter = $this->password[$i];

            if(ctype_digit($caracter)){
                $numeros++;
            }
            elseif(ctype_lower($caracter)){
                $minusculas++;
            }
            elseif(ctype_upper($caracter)){
                $mayusculas++;
            }

        }

        // Verificcacion
        if($numeros >= 5 && $minusculas >= 1 && $mayusculas >= 2){
            echo "La contraseña es segura <br>";
        }else{
            echo "La contraseña NO es segura <br>";
        }

    }

}

?>
