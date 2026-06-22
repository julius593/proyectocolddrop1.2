<?php
include_once '../conexion.php';

$sql = "select * from CARRITO";
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
    <h1>📦 Lista de CARRITO</h1>

    <div class="container">
        <table>
            <tr>
                <th>ID_Producto</th>
                <th>ID_Pedido</th>
                <th>Cantidad</th>
                <th>CostoTotal </th>
            </tr>

            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $id = $fila['idCARRITO'];
                    echo "<tr>
                            <td>{$fila['idCARRITO']}</td>
                            <td>{$fila['ID_Producto']}</td>
                            <td>{$fila['ID_Pedido']}</td>
                            <td>{$fila['Cantidad']}</td>
                            <td>{$fila['CostoTotal ']}</td>
                            <td>
                                <a href='actualizarcarrito.php?idPEDIDOS=$id'><button class='btn editar'>Editar</button></a>
                                <a href='elimcarrito.php?idPEDIDOS=$id'><button class='btn eliminar'>Eliminar</button></a>
                                <a href='casaleercarrito.php?idPEDIDOS=$id'><button class='btn mostrar'>Mostrar</button></a>
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