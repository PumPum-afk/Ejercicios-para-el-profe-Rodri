<?php

$numeros = [10, 20, 30, 40, 50];

$suma = array_sum($numeros);
$cantidad = count($numeros);
$promedio = $suma / $cantidad;

echo "Suma total: " . $suma . "\n";
echo "Cantidad de elementos: " . $cantidad . "\n";
echo "Promedio: " . $promedio . "\n";

?>