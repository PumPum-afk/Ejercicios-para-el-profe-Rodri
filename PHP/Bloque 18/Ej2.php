<?php

function contarAprobados($notas) {

    $aprobados = 0;

    foreach ($notas as $nota) {

        if ($nota >= 6) {
            $aprobados++;
        }

    }

    return $aprobados;
}

$notas = [4, 6, 8, 5, 10, 3];

$resultado = contarAprobados($notas);

echo "Cantidad de aprobados: " . $resultado;

?>