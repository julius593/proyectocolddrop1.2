<?php
include_once '../conexion.php';

$codigo = isset($_GET['Codigo']) ? $_GET['Codigo'] : '';
$idPedido = isset($_GET['idPedido']) ? $_GET['idPedido'] : (isset($_GET['idPEDIDOS']) ? $_GET['idPEDIDOS'] : '');

if (!empty($codigo) && !empty($idPedido)) {
    // Sanitización básica para estudiante
    $codigo = $conn->real_escape_string($codigo);
    $idPedido = (int)$idPedido;

    $sql = "DELETE FROM Carrito WHERE PRODUCTOS_Codigo = '$codigo' AND PEDIDOS_idPEDIDOS = $idPedido";
    $conn->query($sql);
}

// Redirigir de vuelta al carrito con el ID del pedido
header("Location: micarrito.php?idPedido=" . $idPedido);
exit;
?>
