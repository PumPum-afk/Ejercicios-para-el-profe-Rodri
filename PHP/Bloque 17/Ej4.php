<?php

$productos = [
    [
        "id" => 1,
        "nombre" => "Teclado",
        "precio" => 1200,
        "stock" => 5
    ],
    [
        "id" => 2,
        "nombre" => "Mouse",
        "precio" => 800,
        "stock" => 10
    ]
];

$idBuscado = 2;

$encontrado = false;

foreach ($productos as $producto) {

    if ($producto["id"] == $idBuscado) {

        $encontrado = true;

        echo "ID: " . $producto["id"] . "\n";
        echo "Nombre: " . $producto["nombre"] . "\n";
        echo "Precio: $" . $producto["precio"] . "\n";
        echo "Stock: " . $producto["stock"];

    }

}

if ($encontrado == false) {
    echo "Producto no encontrado";
}

?>