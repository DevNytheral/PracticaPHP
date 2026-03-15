<?php

class Casa
{
    private $precio = 0;
    private $propietario;
    private $estadoVenta;

    public function __construct(int $precio, string $propietario, bool $estadoVenta)
    {
        $this->precio = $precio;
        $this->propietario = $propietario;
        $this->estadoVenta = $estadoVenta;
    }

    public function aumentarPrecio(int $precio) : int
    {
        return $this->precio = $this->precio + $precio;
    }

    public function cambiarPropietario(string $propietario) : void
    {
        $this->propietario = $propietario;
    }

    public function estadoCasa() : string
    {
        return $this->estadoVenta ? "en venta" : "no venta";
    }
}