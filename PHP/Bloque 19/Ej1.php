<?php

function calcularPromedio($notas) {

    $suma = 0;

    foreach ($notas as $nota) {
        $suma = $suma + $nota;
    }

    return $suma / count($notas);
}

function obtenerMayor($notas) {

    $mayor = $notas[0];

    foreach ($notas as $nota) {

        if ($nota > $mayor) {
            $mayor = $nota;
        }

    }

    return $mayor;
}

function obtenerMenor($notas) {

    $menor = $notas[0];

    foreach ($notas as $nota) {

        if ($nota < $menor) {
            $menor = $nota;
        }

    }

    return $menor;
}

function contarAprobados($notas) {

    $cantidad = 0;

    foreach ($notas as $nota) {

        if ($nota >= 6) {
            $cantidad++;
        }

    }

    return $cantidad;
}

function contarDesaprobados($notas) {

    $cantidad = 0;

    foreach ($notas as $nota) {

        if ($nota < 6) {
            $cantidad++;
        }

    }

    return $cantidad;
}


$notas = [8, 5, 10, 4, 7, 9];

echo "Notas: \n";

foreach ($notas as $nota) {
    echo $nota . "\n";
}

echo "\n";
echo "Promedio: " . calcularPromedio($notas) . "\n";
echo "Nota más alta: " . obtenerMayor($notas) . "\n";
echo "Nota más baja: " . obtenerMenor($notas) . "\n";
echo "Aprobados: " . contarAprobados($notas) . "\n";
echo "Desaprobados: " . contarDesaprobados($notas) . "\n";

?>