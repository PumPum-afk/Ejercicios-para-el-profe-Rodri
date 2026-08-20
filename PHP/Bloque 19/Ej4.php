<?php

function calcularSubtotal($producto) {

    return $producto["precio"] * $producto["cantidad"];

}

function calcularTotal($productos) {

    $total = 0;

    foreach ($productos as $producto) {
        $total = $total + calcularSubtotal($producto);
    }

    return $total;
}

function aplicarDescuento($total) {

    if ($total > 5000) {

        $descuento = $total * 0.10;

        return $total - $descuento;

    }

    return $total;
}


$productos = [
    [
        "nombre" => "Teclado",
        "precio" => 1200,
        "cantidad" => 2
    ],
    [
        "nombre" => "Mouse",
        "precio" => 800,
        "cantidad" => 1
    ],
    [
        "nombre" => "Monitor",
        "precio" => 5000,
        "cantidad" => 1
    ]
];

foreach ($productos as $producto) {

    $subtotal = calcularSubtotal($producto);

    echo "Producto: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n";
    echo "Cantidad: " . $producto["cantidad"] . "\n";
    echo "Subtotal: $" . $subtotal . "\n\n";

}

$total = calcularTotal($productos);

echo "Total: $" . $total . "\n";

$totalFinal = aplicarDescuento($total);

if ($total > 5000) {
    echo "Se aplicó un descuento del 10%." . "\n";
}

echo "Total final: $" . $totalFinal;

?>