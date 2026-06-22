<?php
include_once '../conexion.php';
$CI=$_GET['CI'];
$sql="SELECT * FROM usuarios WHERE CI=$CI";
$resultado=$conexion->query($sql);
if($resultado->num_rows>0){
        while($fila=$resultado->fetch_assoc()){
              $CI=$fila['CI'];
          $Nombre=$fila['Nombre'];
          $Direccion=$fila['Direccion'];
          $Celular=$fila['Celular'];
          $Rol=$fila['Rol'];
          $Estado=$fila['Estado'];
         
          

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<meta>
<meta>
<title>bienvenido</title>
<body>
    <form action="casaactualizarusuarios.php" method="post">
<h2>USUARIOS</h2>
<label for="">CI</label>
<input type="number" name="CI" value='<?=$CI?>'>

<label for="">Nombre</label>
<input type="text" name="Nombre" value='<?=$Nombre?>'> 

<label for="">Direccion</label>
<input type="text" name="Direccion" value='<?=$Direccion?>'>

<label for="">Celular</label>
<input type="number" name="Celular" value='<?=$Celular?>'>

<label for="">Rol</label>
<input type="text" name="Rol" value='<?=$Rol?>'>

<label for="">Estado</label>
<input type="number" name="Estado" value='<?=$Estado?>'>


<input type="submit" >
    </form>
</body>
</html>