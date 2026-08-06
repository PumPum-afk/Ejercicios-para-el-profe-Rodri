<?php
function esPar($numero) {
    return $numero % 2 == 0;
}

$resultado = esPar(8);

if ($resultado) {
    echo "El número es par";
} else {
    echo "El número es impar";
}
?>