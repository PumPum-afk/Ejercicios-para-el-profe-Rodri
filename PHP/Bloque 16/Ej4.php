<?php

$productos = [
    [
        "nombre" => "Teclado",
        "precio" => 1200,
        "stock" => 5
    ],
    [
        "nombre" => "Mouse",
        "precio" => 800,
        "stock" => 10
    ],
    [
        "nombre" => "Monitor",
        "precio" => 5000,
        "stock" => 3
    ]
];

$totalInventario = 0;

foreach ($productos as $producto) {

    $valor = $producto["precio"] * $producto["stock"];

     echo "Producto: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n";
    echo "Valor del inventarioloque 17: $" . $valor . "\n";
    echo "Stock: " . $producto["stock"] . "\n";

    $totalInventario = $totalInventario + $valor;
}

echo "\n";
echo "Valor total del inventario: $" . $totalInventario;

?>