<?php 
include_once '../conexion.php';

$Codigo=$_POST['Codigo'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Talla=$_POST['Talla'];
$Color=$_POST['Color'];
$Costo=$_POST['Costo'];
$Stock=$_POST['Stock'];
$Imagen=$_POST['Imagen'];
$sql = "INSERT INTO productos (Codigo, Nombre, Tipo, Talla, Color, Costo, Stock, Imagen) VALUES('$Codigo','$Nombre','$Tipo','$Talla', '$Color','$Costo','$Stock','$Imagen')";


if($conn->query($sql) === TRUE){
    echo"Nuevo producto creado exitosamente";
} else{
    echo"Error:". $sql. "<br>". $conn->error;
}
$conn->close();
?>
