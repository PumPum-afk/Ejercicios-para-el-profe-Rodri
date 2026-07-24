<?php

$numero = 10;
$texto = "10";

// Este compara si son la mima variable, es decir, si son iguales y del mismo tipo de dato
if ($numero == $texto) {
    echo "Con == : Son iguales\n";
} else {
    echo "Con == : Son diferentes\n";
}

// Este compara el valor y el tipo de dato y como uno tiene comillas y el otro no los detecta diferentes
if ($numero === $texto) {
    echo "Con === : Son iguales\n";
} else {
    echo "Con === : Son diferentes\n";
}
?>