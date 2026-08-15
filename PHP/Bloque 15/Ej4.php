<?php

$producto = [
    "nombre" => "Teclado",
    "precio" => 1200,
    "stock" => 5
];

$cantidad = 3;

if ($cantidad <= $producto["stock"]) {

    $total = $producto["precio"] * $cantidad;

    $producto["stock"] = $producto["stock"] - $cantidad;

    echo "Venta realizada " . "\n";
    echo "Producto: " . $producto["nombre"] . "\n";
    echo "Cantidad: " . $cantidad . "\n";
    echo "Total: $" . $total . "\n";
    echo "Stock restante: " . $producto["stock"];

} else {

    echo "Error: no hay suficiente stock.";

}

?>