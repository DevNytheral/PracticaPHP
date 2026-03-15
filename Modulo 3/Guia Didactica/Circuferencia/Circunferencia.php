<?php

class Circunferencia
{
    public static $pi = 3.1415926535;

    public function valorStatic1() {
        echo "Self:". self::$pi;
    }

    public function valorStatic2() {
        echo "This:" . $this->pi;
    }
}

?>