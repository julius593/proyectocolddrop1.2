<?php
include_once '../conexion.php';

$sql = "select * from usuarios";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>📦 Lista de usuarios</h1>

    <div class="container">
        <table>
            <tr>
                <th>CI</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Celular</th>
                <th>Rol</th>
                <th>Estado</th>
            </tr>

            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $CI = $fila['CI'];
                    echo "<tr>
                    <td>{$fila['CI']}</td>
                            <td>{$fila['Nombre']}</td>
                            <td>{$fila['Direccion']}</td>
                            <td>{$fila['Celular']}</td>
                            <td>{$fila['Rol']}</td>
                            <td>{$fila['Estado']}</td>
                            
                            
                            <td>
                                <a href='actualizarusuarios.php?CI=$CI'><button class='btn editar'>Editar</button></a>
                                <a href='elimusuarios.php?CI=$CI'><button class='btn eliminar'>Eliminar</button></a>
                                <a href='casaleerusuarios.php?CI=$CI'><button class='btn mostrar'>Mostrar</button></a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No hay usuarios registradas.</td></tr>";
            }

            $conexion->close();
            ?>
        </table>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> - Sistema de Gestión de Productos 💜
    </footer>