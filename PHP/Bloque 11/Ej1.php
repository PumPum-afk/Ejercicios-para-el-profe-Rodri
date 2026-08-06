<?php
function esMayorDeEdad($edad) {
    return $edad >= 18;
}

$resultado = esMayorDeEdad(20);

if ($resultado) {
    echo "Es mayor de edad";
} else {
    echo "Es menor de edad";
}
?>