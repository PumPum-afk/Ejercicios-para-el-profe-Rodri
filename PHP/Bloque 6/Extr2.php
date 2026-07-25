<?php
$metodoPago = "efectivo";
$descuento = "";

switch ($metodoPago) {
    case "efectivo":
        $descuento = "10%";
        break;

    case "tarjeta":
        $descuento = "0%";
        break;

    case "transferencia":
        $descuento = "5%";
        break;

    default:
        echo "Método de pago no válido";
        exit;
}

echo "Método de pago: " . $metodoPago . "\n";
echo "Descuento: " . $descuento;
?>