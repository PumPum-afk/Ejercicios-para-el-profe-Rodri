<?php
$precioUnitario = 100;
$cantidadComprada = 6;

$subtotal = $precioUnitario * $cantidadComprada;
$descuento = 0;

if ($cantidadComprada >= 5) {
    $descuento = $subtotal * 0.10; 
}

$totalFinal = $subtotal - $descuento;

echo "Subtotal: $" . $subtotal . "\n";
echo "Descuento: $" . $descuento . "\n";
echo "Total final: $" . $totalFinal;
?>