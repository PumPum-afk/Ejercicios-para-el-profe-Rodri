<?php
$precio = 100;
$presupuesto = 600;
$stock = 10;
$cantidadSolicitada = 5;

$total = $precio * $cantidadSolicitada;

if ($stock >= $cantidadSolicitada && $presupuesto >= $total) {
    echo "Compra realizada";
} else {
    echo "No se puede realizar la compra";
}
?>