<?php
function aplicarDescuento($precio, $porcentajeDescuento) {
    $descuento = $precio * ($porcentajeDescuento / 100);
    return $precio - $descuento;
}

$precioFinal = aplicarDescuento(1000, 10);

echo "Precio final: $" . $precioFinal;
?>