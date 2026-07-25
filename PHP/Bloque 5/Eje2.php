<?php
$rol = "administrador";

if ($rol == "administrador" || $rol == "docente") {
    echo "Acceso permitido";
} else {
    echo "Acceso denegado";
}
?>