<?php

$notas = [4, 7, 5, 8, 3, 9, 2];

$suma = array_sum($notas);
$cantidad = count($notas);
$promedio = $suma / $cantidad;

$aprobados = 0;
$desaprobados = 0;

echo "Notas: \n";

foreach ($notas as $nota) {

    echo "$nota \n";

    if ($nota >= 5) {
        $aprobados++;
    } else {
        $desaprobados++;
    }
}

echo "<br>";
echo "Promedio: $promedio \n";
echo "Aprobados: $aprobados \n";
echo "Desaprobados: $desaprobados";

?>