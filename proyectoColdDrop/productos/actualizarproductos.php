<?php
include_once '../conexion.php';
$Codigo=$_GET['Codigo'];
$sql="select * from productos where Codigo=$Codigo";
$resultado=$conexion->query($sql);
if($resultado->num_rows>0){
        while($fila=$resultado->fetch_assoc()){
             $Codigo=$fila['Codigo'];
          $Nombre=$fila['Nombre'];
          $Tipo=$fila['Tipo'];
          $Talla=$fila['Talla'];
          $Color=$fila['Color'];
          $Costo=$fila['Costo'];
          $Stock=$fila['Stock'];
          $Codigo=$fila['Codigo'];

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como hacer un CRUD</title>
</head>
<body>
    <form action="casaactualizarproductos.php" method="post">
<h2>PRODUCTOS</h2>
<label for="">Codigo</label>
<input type="text" name="Codigo" value='<?=$Codigo?>'>
<label for="">Nombre</label>
<input type="text" name="Nombre" value='<?=$Nombre?>'> 

<label for="">Tipo</label>
<input type="text" name="Tipo" value='<?=$Tipo?>'>

<label for="">Talla</label>
<input type="number" name="Talla" value='<?=$Talla?>'>

<label for="">Color</label>
<input type="text" name="Color" value='<?=$Color?>'>

<label for="">Costo</label>
<input type="number" name="Costo" value='<?=$Costo?>'>

<label for="">Stock</label>
<input type="number" name="Stock" value='<?=$Stock?>'>

<input type="submit" >
    </form>
    
</body>
</html>
