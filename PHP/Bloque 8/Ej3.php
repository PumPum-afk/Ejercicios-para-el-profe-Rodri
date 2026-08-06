<?php

$contador = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $contador++;
    }
}
echo "La cantidad de números pares es: " . $contador;