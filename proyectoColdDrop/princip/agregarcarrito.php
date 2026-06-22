<?php

include_once '../conexion.php';


$codigo = $_POST["Codigo"];
$idpedido = $_POST["id_PEDIDOS"];

if (empty($idpedido) || !is_numeric($idpedido)) {
    die("Error: No se ha especificado un ID de pedido válido. Por favor, inicia un nuevo pedido.");
}

$cantidad = $_POST["cantidad"];
$costo = $_POST["Costo"];
$total=$costo*$cantidad;

$sql = "INSERT INTO Carrito
(PRODUCTOS_Codigo, PEDIDOS_idPEDIDOS, cantidad, costoTotal)
VALUES
('$codigo','$idpedido','$cantidad','$total')
ON DUPLICATE KEY UPDATE
     cantidad = cantidad + VALUES(cantidad),
     costoTotal = costoTotal + VALUES(costoTotal)";



if($conn->query($sql)){
    echo "Producto agregado al carrito";
    header("location: micarrito.php?idPedido=".$idpedido);
}else{
    echo "El producto ya se agregó";
    echo "<a href='micarrito.php?idPedido=$idpedido'>
        <button>Volver a Pedidos</button>
      </a>";
}



?>
