<?php
include_once '../conexion.php';

$sql = "SELECT * from productos";
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
    <h1>📦 Lista de productos</h1>

    <div class="container">
        <table>
            <tr>
              <th>codigo</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>color</th>
                <th>costo</th>
                <th>stock</th>
            </tr>

            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $id = $fila['Codigo'];
                    echo "<tr>
                              <td>{$fila['Codigo']}</td>
                            <td>{$fila['Nombre']}</td>
                            <td>{$fila['Tipo']}</td>
                            <td>{$fila['Color']}</td>
                            <td>{$fila['Costo']}</td>
                            <td>{$fila['Stock']}</td>
                            
                            <td>
                                <a href='actualizarproductos.php?Codigo=$id'><button class='btn editar'>Editar</button></a>
                                <a href='elimproductos.php?Codigo=$id'><button class='btn eliminar'>Eliminar</button></a>
                                <a href='casaleerproductos.php?Codigo=$id'><button class='btn mostrar'>Mostrar</button></a>
                                <a href='pantalones.php?Codigo=$id'><button class='btn ver'>Ver</button></a>
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