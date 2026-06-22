<?php
include_once '../conexion.php';
$idPEDIDOS=$_GET['idPEDIDOS'];
$sql="SELECT * FROM PEDIDOS WHERE idPEDIDOS=$idPEDIDOS";

$resultado=$conexion-> query($sql);
if($resultado->num_rows>0){
 while($fila=$resultado->fetch_assoc()){
   echo $fila['idPEDIDOS']."".$fila['Nombre']."".$fila['Fecha']."".$fila['Estado']." ".$fila['NombreVendedor']." ";
   $idPEDIDOS=$fila['idPEDIDOS'];

 }

}





?>
