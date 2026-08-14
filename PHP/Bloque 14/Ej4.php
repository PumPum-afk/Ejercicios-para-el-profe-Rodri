<?php

$numeros = [10, 7, 4, 15, 8, 3, 20];

$suma = array_sum($numeros);
$cantidad = count($numeros);
$promedio = $suma / $cantidad;

$mayor = max($numeros);
$menor = min($numeros);

$pares = 0;
$impares = 0;

echo "Números: \n";

foreach ($numeros as $numero) {

    echo "$numero <br>";

    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "<br>";
echo "Suma: $suma \n";
echo "Promedio: $promedio \n";
echo "Mayor: $mayor \n";
echo "Menor: $menor \n";
echo "Pares: $pares \n";
echo "Impares: $impares";

?>