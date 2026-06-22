<?php

include_once '../conexion.php';

$nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$estado = $_POST["estado"];
$nombreVendedor = $_POST["nombreVendedor"];

$sql = "INSERT INTO pedidos (Nombre, Fecha, Estado, NombreVendedor) VALUES ('$nombre', '$fecha', '$estado', '$nombreVendedor')";

if($conn->query($sql)){
    header("location: miCarrito.php?idPedido=".$conn->insert_id);
}else{
    echo "Error: " . $conn->error;
}

$conn->close();

?>
