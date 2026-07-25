<?php
$edad = 16;
$tieneEntrada = false;
$acompanadoPorAdulto = true;

if (($edad >= 18 && $tieneEntrada) || $acompanadoPorAdulto && $tieneEntrada) {
    echo "Acceso permitido";
} else {
    echo "Acceso denegado";
}
?>