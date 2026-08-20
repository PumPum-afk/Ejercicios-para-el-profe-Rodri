<?php

$usuarios = [
    [
        "id" => 1,
        "nombre" => "Juan",
        "usuario" => "juan123",
        "contraseña" => "1234",
        "rol" => "admin",
        "activo" => true
    ],
    [
        "id" => 2,
        "nombre" => "Pedro",
        "usuario" => "pedro123",
        "contraseña" => "5678",
        "rol" => "usuario",
        "activo" => true
    ],
    [
        "id" => 3,
        "nombre" => "Ana",
        "usuario" => "ana123",
        "contraseña" => "abcd",
        "rol" => "usuario",
        "activo" => false
    ]
];

$usuarioIngresado = "juan123";
$passwordIngresada = "1234";

$encontrado = false;

foreach ($usuarios as $usuario) {

    if ($usuario["usuario"] == $usuarioIngresado) {

        $encontrado = true;

        if ($usuario["contraseña"] != $passwordIngresada) {

            echo "Contraseña incorrecta";

        } elseif ($usuario["activo"] == false) {

            echo "El usuario está inactivo";

        } else {

            echo "Inicio de sesión correcto\n";
            echo "Bienvenido " . $usuario["nombre"] . "\n";

            if ($usuario["rol"] == "admin") {
                echo "Tenés permisos de administrador";
            } else {
                echo "Tenés permisos de usuario";
            }

        }

    }

}

if ($encontrado == false) {
    echo "Usuario no encontrado";
}

?>