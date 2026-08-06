<?php
function calcularTotal($precio, $cantidad) {
    return $precio * $cantidad;
}

$total1 = calcularTotal(100, 5);
$total2 = calcularTotal(250, 3);
$total3 = calcularTotal(80, 10);

echo "Total 1: $" . $total1 . " \n";
echo "Total 2: $" . $total2 . " \n";
echo "Total 3: $" . $total3;
?>