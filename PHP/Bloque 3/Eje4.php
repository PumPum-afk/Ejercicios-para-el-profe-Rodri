<?php

$stockDisponible = 50;
$cantidadSolicitada = 20;
$precio = 15;
$presupuestoCliente = 400;


if ($stockDisponible >= $cantidadSolicitada) {
    echo "Hay stock suficiente.\n";
} else {
    echo "No hay stock suficiente.\n";
}


$total = $cantidadSolicitada * $precio;


if ($presupuestoCliente >= $total) {
    echo "El cliente tiene presupuesto suficiente.\n";
} else {
    echo "El cliente no tiene presupuesto suficiente.\n";
}
?>