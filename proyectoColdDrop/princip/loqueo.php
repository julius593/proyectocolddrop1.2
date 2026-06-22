<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start(); // Inicia la sesión

include_once '../conexion.php';

$usuario = $_POST['Nombre'];
$clave = $_POST['CI'];

$sql = "SELECT * FROM usuarios
        WHERE Nombre='$usuario'
        AND Fecha='$clave'";

$resultado = mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado) > 0){

    $fila = mysqli_fetch_assoc($resultado);

    // Guardar datos en la sesión
    $_SESSION['id'] = $fila['idPedidos'];
    $_SESSION['usuario'] = $fila['Nombre'];
    $_SESSION['descripcion']=$fila['Descripcion'];
    $_SESSION['Precio']=$fila['Precio'];
}if($_SESSION['id']=="Pedidos"){



    header("Location:micarrito.php");

}
if($_SESSION['id']=="administrador"){
s


    header("Location:administrador.php");

}else{
    echo "Usuario o contraseña incorrectos";
}

?>
</body>
</html>