<?php
$servidor = "localhost";
$usuario = "root";
$contrasena ="";
$database = "colddrop";

$conexion = new mysqli($servidor, $usuario, $contrasena, $database);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Establecer el juego de caracteres a utf8
$conexion->set_charset("utf8");

// Variable para compatibilidad con archivos que usan $conn
$conn = $conexion;
?>
