<?php

function buscarProductoPorId($productos, $id) {

    foreach ($productos as $producto) {

        if ($producto["id"] == $id) {
            return $producto;
        }

    }

    return null;
}

$productos = [
    [
        "id" => 1,
        "nombre" => "Teclado",
        "precio" => 1200
    ],
    [
        "id" => 2,
        "nombre" => "Mouse",
        "precio" => 800
    ]
];

$idBuscado = 2;

$producto = buscarProductoPorId($productos, $idBuscado);

if ($producto != null) {
    echo "Producto encontrado: " . $producto["nombre"];
} else {
    echo "Producto no encontrado";
}

?>