<?php

$producto = [
    "nombre" => "Mouse",
    "precio" => 800,
    "stock" => 10
];

echo "Producto original:" . "\n";
echo "Nombre: " . $producto["nombre"] . "\n";
echo "Precio: $" . $producto["precio"] . "\n";
echo "Stock: " . $producto["stock"] . "\n";


$producto["precio"] = 1000;


$producto["stock"] = 7;


$producto["categoria"] = "Periféricos";

echo "Producto actualizado:" . "\n";
echo "Nombre: " . $producto["nombre"] . "\n";
echo "Precio: $" . $producto["precio"] . "\n";
echo "Stock: " . $producto["stock"] . "\n";
echo "Categoría: " . $producto["categoria"];

?>