<?php

$nombres = ["Juan", "Pedro", "Mateo", "Lucas", "Sofía"];

$buscar = "Mateo";
$encontrado = false;

foreach ($nombres as $nombre) {
    if ($nombre == $buscar) {
        $encontrado = true;
    }
}

if ($encontrado) {
    echo "El nombre fue encontrado";
} else {
    echo "El nombre no existe";
}

?>