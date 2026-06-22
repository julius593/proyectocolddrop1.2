<?php
include_once '../conexion.php';
$Codigo=$_GET['Codigo'];
$sql="SELECT * FROM productos WHERE Codigo=$Codigo";

$resultado=$conexion-> query($sql);
if($resultado->num_rows>0){
 while($fila=$resultado->fetch_assoc()){
   echo $fila['Codigo']."".$fila['Nombre']."".$fila['Tipo']."".$fila['Talla']." ".$fila['Color']." ".$fila['Costo']." ".$fila['Stock']." ";
   $idCodigo=$fila['Codigo'];

 }

}





?>
