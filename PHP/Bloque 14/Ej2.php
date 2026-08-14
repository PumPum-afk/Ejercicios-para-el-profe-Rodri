<?php

$notas = [4, 7, 5, 3, 9, 2];

foreach ($notas as $nota) {

    if ($nota >= 5) {
        echo "Nota: $nota - Aprobada \n";
    } else {
        echo "Nota: $nota - Desaprobada \n";
    }

}

?>