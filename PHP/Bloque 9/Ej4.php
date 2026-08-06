<?php

$ahorro = 0;
$mes = 0;

while ($ahorro < 5000) {
    $mes++;
    $ahorro += 500;

    echo "Mes " . $mes . ": $" . $ahorro . "\n";
}

echo "Necesitó $mes meses.";