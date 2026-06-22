<?php
include_once '../conexion.php';
$idPEDIDOS=$_GET['idPEDIDOS'];
$sql="DELETE FROM PEDIDOS WHERE idPEDIDOS=$idPEDIDOS";
if($conn->query($sql)===TRUE) {
    echo"nuevos pedidos eliminado exitosamente";
} else {
    echo"error:".$sql."<br>";
}




?>