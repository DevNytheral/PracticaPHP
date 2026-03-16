<?php

class cuentaBancaria {
    private $titular;
    private $saldo;
    private $numerocuenta;

    public function __construct($titular, $saldo, $numerocuenta){
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->numerocuenta =$numerocuenta;
    }
    public function getTitular(){
        return $this->titular;
    }
    public function setTitular($str){
        $this->titular = $str;
        
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($cantidad){
        $this->saldo += $cantidad;
        
    }
    public function retirarSaldo($cantidad){
        if ($this->saldo > $cantidad){
            $this->saldo -= $cantidad;
            echo "Se retiro la cantidad solicitada";
        }
        else{
            echo "No hay fondo suficiente";
        }
    }
}




?>
