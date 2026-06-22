<?php
include_once '../conexion.php';

$sql = "SELECT * from PEDIDOS";
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
    <h1>📦 Lista de PEDIDOS</h1>

    <div class="container">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>NombreVendedor</th>
            </tr>

            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $id = $fila['idPEDIDOS'];
                    echo "<tr>
                            <td>{$fila['idPEDIDOS']}</td>
                            <td>{$fila['Nombre']}</td>
                            <td>{$fila['Fecha']}</td>
                            <td>{$fila['Estado']}</td>
                            <td>{$fila['NombreVendedor']}</td>
                            <td>
                                <a href='actualizarpedidos.php?idPEDIDOS=$id'><button class='btn editar'>Editar</button></a>
                                <a href='elimpedidos.php?idPEDIDOS=$id'><button class='btn eliminar'>Eliminar</button></a>
                                <a href='casaleerpedidos.php?idPEDIDOS=$id'><button class='btn mostrar'>Mostrar</button></a>
                                
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