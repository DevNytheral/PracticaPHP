<?php
require_once("Ecommerce.php");


// Crear productos
$p1 = new Producto("Laptop", 2000, 5);
$p2 = new Producto("Mouse", 50, 10);
$p3 = new Producto("Teclado", 100, 3);

// Crear carrito
$carrito = new Carrito();

// Agregar productos
$carrito->agregarProducto($p1, 1); // Laptop x1
$carrito->agregarProducto($p2, 2); // Mouse x2
$carrito->agregarProducto($p3, 1); // Teclado x1

echo "<hr>";

// Mostrar total
echo "Total del carrito: " . $carrito->calcularTotal() . "<br>";

echo "<hr>";

// Mostrar productos del carrito (si hiciste mostrarCarrito)
$carrito->mostrarCarrito();

echo "<hr>";

// Pruebas extra

// Intentar comprar más stock del disponible
$carrito->agregarProducto($p3, 10);

// Intentar cantidad inválida
$carrito->agregarProducto($p2, -5);

echo "<hr>";

// Mostrar total final
echo "Total final: " . $carrito->calcularTotal();

?>