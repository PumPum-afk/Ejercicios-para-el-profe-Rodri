<?php

$numeros = [15, 8, 32, 4, 67];

$mayor = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $mayor) {
        $mayor = $numero;
    }
}

echo "El número mayor es: " . $mayor;

?>