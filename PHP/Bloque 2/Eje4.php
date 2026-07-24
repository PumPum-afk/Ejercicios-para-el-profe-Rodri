<?php

$minutos = 150;

//el intdiv me lo recomedo la ia y ahi le agarre la mano a lo que es
$horas = intdiv($minutos, 60);
$restoMinutos = $minutos % 60; 

echo "$minutos minutos equivalen a $horas horas y $restoMinutos minutos.";
?>