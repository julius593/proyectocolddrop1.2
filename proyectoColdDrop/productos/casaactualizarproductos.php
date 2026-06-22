<?php
include_once '../conexion.php';
$Codigo=$_POST['Codigo'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Talla=$_POST['Talla'];
$Color=$_POST['Color'];
$Costo_de_Produccion=$_POST['Costo'];
$Stock=$_POST['Stock'];


$sql="UPDATE productos SET Nombre='$Nombre',Tipo='$Tipo',Talla='$Talla',Color='$Color',Costo='$Costo',Stock='$Stock' WHERE Codigo=$Codigo ";
if($conexion->query($sql)=== TRUE){
    echo "El producto se proporciono exitosamente:)";
}
?>