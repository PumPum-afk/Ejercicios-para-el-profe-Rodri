<?php

$numeros = [10, 20, 30, 40, 50];

$suma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $suma = $suma + $numeros[$i];
}

echo "Suma con for: " . $suma . "\n";

?>