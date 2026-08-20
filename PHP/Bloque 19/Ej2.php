<?php

function mostrarProductos($productos) {

    foreach ($productos as $producto) {

        echo "ID: " . $producto["id"] . "\n";
        echo "Nombre: " . $producto["nombre"] . "\n";
        echo "Precio: $" . $producto["precio"] . "\n";
        echo "Stock: " . $producto["stock"] . "\n";
        echo "Categoría: " . $producto["categoria"] . "\n";

    }
}

function mostrarConStock($productos) {

    foreach ($productos as $producto) {

        if ($producto["stock"] > 0) {
            echo $producto["nombre"] . "\n";
        }

    }
}

function buscarPorId($productos, $id) {

    foreach ($productos as $producto) {

        if ($producto["id"] == $id) {
            return $producto;
        }

    }

    return null;
}

function valorInventario($productos) {

    $total = 0;

    foreach ($productos as $producto) {

        $total = $total + ($producto["precio"] * $producto["stock"]);

    }

    return $total;
}

function productoMasCaro($productos) {

    $mayor = $productos[0];

    foreach ($productos as $producto) {

        if ($producto["precio"] > $mayor["precio"]) {
            $mayor = $producto;
        }

    }

    return $mayor;
}


$productos = [
    [
        "id" => 1,
        "nombre" => "Teclado",
        "precio" => 1200,
        "stock" => 5,
        "categoria" => "Periféricos"
    ],
    [
        "id" => 2,
        "nombre" => "Mouse",
        "precio" => 800,
        "stock" => 10,
        "categoria" => "Periféricos"
    ],
    [
        "id" => 3,
        "nombre" => "Monitor",
        "precio" => 5000,
        "stock" => 3,
        "categoria" => "Pantallas"
    ]
];

echo "Todos los productos";
mostrarProductos($productos);

echo "Productos con stock";
mostrarConStock($productos);

echo "Buscar producto";

$producto = buscarPorId($productos, 2);

if ($producto != null) {
    echo "Encontrado: " . $producto["nombre"] . "\n";
} else {
    echo "Producto no encontrado";
}

echo "Valor del inventario";
echo "$" . valorInventario($productos);

echo "Producto más caro";

$caro = productoMasCaro($productos);

echo $caro["nombre"] . " - $" . $caro["precio"];

?>