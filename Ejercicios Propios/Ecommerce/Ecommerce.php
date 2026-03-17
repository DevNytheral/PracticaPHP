<?php

class Producto {
    private $nombre;
    private $precio;
    private $stock;

    public function __construct($nombre,$precio,$stock){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getStock(){
        return $this->stock;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function comprar($cantidad){
        if ($cantidad > $this->stock){
            echo "Stock insuficiente<br>";
            return false;
        } else {
            $this->stock -= $cantidad;
            return true;
        }
    }

    public function agregarStock($cantidad){
        $this->stock += $cantidad;
    }

    public function mostrarInfo(){
        echo "$this->nombre - $this->precio - Stock: $this->stock <br>";
    }
}

class Carrito {
    private $productos;
    private $total;

    public function __construct(){
        $this->productos = [];
        $this->total = 0;
    }

    public function agregarProducto($producto,$cantidad){

        if ($cantidad <= 0){
            echo "Cantidad inválida<br>";
            return;
        }

        if ($producto->comprar($cantidad)){

            $this->productos[] = [
                "producto" => $producto,
                "cantidad" => $cantidad
            ];

            $this->total += $producto->getPrecio() * $cantidad;
        }
    }

    public function calcularTotal(){
        return $this->total;
    }

    public function mostrarCarrito(){
        foreach ($this->productos as $item){
            $producto = $item["producto"];
            $cantidad = $item["cantidad"];

            echo $producto->getNombre() . " | Cantidad: " . $cantidad . " | Subtotal: " . ($producto->getPrecio() * $cantidad) . "<br>";
        }

        echo "TOTAL: " . $this->total;
    }
}

?>