<?php
function calcularPromedio($nota1, $nota2, $nota3) {
    return ($nota1 + $nota2 + $nota3) / 3;
}

function estaAprobado($promedio) {
    if ($promedio >= 6) {
        return "Aprobado";
    } else {
        return "Desaprobado";
    }
}

$promedio = calcularPromedio(8, 7, 5);

echo "Promedio: " . $promedio . " \n";
echo "Resultado: " . estaAprobado($promedio);
?>