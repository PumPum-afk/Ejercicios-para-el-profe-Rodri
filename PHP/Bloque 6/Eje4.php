<?php
$nombreProducto = "Mouse gaymer";
$precio = 500;
$stock = 20;
$cantidadSolicitada = 12;

if ($stock >= $cantidadSolicitada) {
    $subtotal = $precio * $cantidadSolicitada;
    $descuento = 0;

    if ($cantidadSolicitada >= 10) {
        $descuento = $subtotal * 0.15;
    }

    $totalFinal = $subtotal - $descuento;

    echo "Producto: " . $nombreProducto . "\n";
    echo "Subtotal: $" . $subtotal . "\n";
    echo "Descuento: $" . $descuento . "\n";
    echo "Total final: $" . $totalFinal;
} else {
    echo "Error: no hay suficiente stock.";
}
?>