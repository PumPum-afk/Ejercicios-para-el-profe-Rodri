<?php

$contador = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0) {
        $contador += $i;
    }

}

echo "La suma de los múltiplos de 3 es: $contador ";