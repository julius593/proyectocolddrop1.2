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

$usuario = $_POST['Usuario'];
$contrasena = $_POST['Contrasena'];

$sql = "SELECT * FROM usuarios
        WHERE Usuario='$usuario'
        AND Contrasena='$contrasena'";

$resultado = mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado) > 0){
    $fila = mysqli_fetch_assoc($resultado);

    // Guardar datos en la sesión
    $_SESSION['id'] = $fila['CI'];
    $_SESSION['usuario'] = $fila['Nombre'];
    $_SESSION['dir']=$fila['Direccion'];
    $_SESSION['rol']=$fila['Rol'];
    
    if($_SESSION['rol']=="vendedor"){
        header("Location:vendedor.php");
    }else if($_SESSION['rol']=="Administrador"){
        header("Location:Administrador.php");
    }else{
        echo "Rol no reconocido";
    }
}else{
    echo "Usuario o contraseña incorrectos";
}
    

?>
</body>
</html>