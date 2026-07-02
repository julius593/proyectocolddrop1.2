<?php
include_once '../conexion.php';
session_start();

//obtiene el id del pedido de la URL o busca el último pedido en la BD para evitar fallos
$id_PEDIDOS = '';
if (isset($_GET['idPedido'])) {
    $id_PEDIDOS = $_GET['idPedido'];
} elseif (isset($_GET['idPEDIDOS'])) {
    $id_PEDIDOS = $_GET['idPEDIDOS'];
}

if (empty($id_PEDIDOS)) {
    $sqlUltimo = "SELECT idPEDIDOS FROM pedidos ORDER BY idPEDIDOS DESC LIMIT 1";
    $resUltimo = $conn->query($sqlUltimo);
    if ($resUltimo && $resUltimo->num_rows > 0) {
        $filaUltimo = $resUltimo->fetch_assoc();
        $id_PEDIDOS = $filaUltimo['idPEDIDOS'];
    } else {
        // Crear un pedido por defecto si la tabla está vacía
        $vendedor = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'General';
        $fecha = date('Y-m-d');
        $conn->query("INSERT INTO pedidos (Nombre, Fecha, Estado, NombreVendedor) VALUES ('Cliente General', '$fecha', 'En Proceso', '$vendedor')");
        $id_PEDIDOS = $conn->insert_id;
    }
}

// Obtener todos los productos para el catálogo
$sql = "SELECT * FROM productos";
$resultado = $conn->query($sql);

// Obtener los productos que están agregados a este carrito
$sqlCart = "SELECT c.*, p.Nombre, p.Costo, p.Talla, p.Imagen 
            FROM Carrito c 
            JOIN productos p ON c.PRODUCTOS_Codigo = p.Codigo 
            WHERE c.PEDIDOS_idPEDIDOS = '$id_PEDIDOS'";
$resultadoCart = $conn->query($sqlCart);

// Para hallar el total del pedido
$sqlTotal="SELECT sum(costoTotal) FROM Carrito where PEDIDOS_idPEDIDOS='$id_PEDIDOS'";
$resultadoTotal=$conn->query($sqlTotal);
$res = $resultadoTotal->fetch_assoc();
$total=$res['sum(costoTotal)'];
if($total==null){
    $total=0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito - ColdDrop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f6;
            margin: 0;
            padding: 0;
            color: #333;
            display: block !important;
        }
        .container {
            max-width: 1100px;
            margin: 40px auto;
            background: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        h2 {
            font-size: 32px;
            color: #111;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 0;
            font-family: 'Madimi One', sans-serif;
        }
        .section-title {
            font-size: 22px;
            color: #111;
            margin: 40px 0 20px 0;
            border-bottom: 2px solid #111;
            padding-bottom: 10px;
            font-weight: 600;
        }
        .total-box {
            background: #111;
            color: #fff;
            padding: 15px 25px;
            border-radius: 8px;
            display: inline-block;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }
        .total-box h3 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        th {
            background-color: #f8f8f9;
            color: #555;
            text-align: left;
            padding: 15px 12px;
            font-weight: 600;
            border-bottom: 2px solid #eaeaea;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }
        td {
            padding: 15px 12px;
            border-bottom: 1px solid #eaeaea;
            vertical-align: middle;
            font-size: 15px;
        }
        tr:hover {
            background-color: #fafafa;
        }
        .product-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        input[type="number"] {
            width: 70px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            text-align: center;
            font-size: 14px;
        }
        input[type="number"]:focus {
            border-color: #111;
            outline: none;
        }
        button, input[type="submit"] {
            padding: 10px 20px;
            background-color: #111;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 14px;
        }
        button:hover, input[type="submit"]:hover {
            background-color: #333;
            transform: translateY(-1px);
        }
        .btn-eliminar {
            background-color: #dc3545;
            text-decoration: none;
            color: #fff;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
            transition: all 0.2s;
        }
        .btn-eliminar:hover {
            background-color: #bd2130;
            transform: translateY(-1px);
        }
        .btn-mostrar {
            background-color: #6c757d;
            text-decoration: none;
            color: #fff;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
            transition: all 0.2s;
        }
        .btn-mostrar:hover {
            background-color: #5a6268;
            transform: translateY(-1px);
        }
        .btn-nuevo {
            display: inline-block;
            background-color: #000;
            color: #fff;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.2s;
            text-align: center;
            border: none;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }
        .btn-nuevo:hover {
            background-color: #222;
            transform: translateY(-2px);
        }
        .empty-cart {
            padding: 40px;
            text-align: center;
            color: #777;
            font-size: 16px;
            background: #fdfdfd;
            border: 1px dashed #ddd;
            border-radius: 12px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="container">
        <h2>Detalles del Carrito</h2>
        <p style="color: #666; margin-bottom: 20px;">Pedido ID: #<?php echo htmlspecialchars($id_PEDIDOS); ?></p>
        
        <div class="total-box">
            <h3>Total del Pedido: $<?php echo number_format($total, 2); ?></h3>
        </div>

        <!-- SECCIÓN 1: ARTÍCULOS EN EL CARRITO -->
        <div class="section-title">Artículos en tu Carrito</div>
        <?php if ($resultadoCart && $resultadoCart->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Talla</th>
                        <th>Precio Unitario</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($item = $resultadoCart->fetch_assoc()) {
                        $img = !empty($item['Imagen']) ? $item['Imagen'] : 'default.jpg';
                        echo "<tr>";
                            echo "<td><img class='product-img' src='../imagenes/".htmlspecialchars($img)."' alt=''></td>";
                            echo "<td>".htmlspecialchars($item["PRODUCTOS_Codigo"])."</td>";
                            echo "<td>".htmlspecialchars($item["Nombre"])."</td>";
                            echo "<td>".htmlspecialchars($item["Talla"])."</td>";
                            echo "<td>$".number_format($item["Costo"], 2)."</td>";
                            echo "<td>".htmlspecialchars($item["cantidad"])."</td>";
                            echo "<td>$".number_format($item["costoTotal"], 2)."</td>";
                            echo "<td>";
                                echo "<a href='elimcarrito.php?Codigo=".htmlspecialchars($item["PRODUCTOS_Codigo"])."&idPedido=".htmlspecialchars($id_PEDIDOS)."' class='btn-eliminar'>Eliminar</a>";
                            echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="empty-cart">
                Tu carrito está vacío. ¡Agrega algunos productos del catálogo de abajo!
            </div>
        <?php endif; ?>

        <!-- SECCIÓN 2: CATÁLOGO DE PRODUCTOS -->
        <div class="section-title">Catálogo de Productos (Agregar al Carrito)</div>
        <table>
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Talla</th>
                    <th>Precio</th>
                    <th>Detalles</th>
                    <th colspan="2" style="text-align: center;">Agregar al Carrito</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($fila = $resultado->fetch_assoc()){
                    $formId = "form_" . $fila["Codigo"];
                    $img = !empty($fila['Imagen']) ? $fila['Imagen'] : 'default.jpg';
                    echo "<form id='$formId' action='agregarcarrito.php' method='post'></form>";
                    echo "<tr>";
                        echo "<td><img class='product-img' src='../imagenes/".htmlspecialchars($img)."' alt=''></td>";
                        echo "<td>".$fila["Codigo"]."</td>";
                        echo "<td>".$fila["Nombre"]."</td>";
                        echo "<td>".$fila["Talla"]."</td>";
                        echo "<td>$".number_format($fila["Costo"], 2)."</td>";
                        echo "<td>
                                <a href='crearproducto.php?codigo=".$fila["Codigo"]."' class='btn-mostrar'>Mostrar</a>
                            </td>";
                        echo "<td style='text-align: right;'>";
                            echo "<input type='hidden' value='".$fila["Codigo"]."' name='Codigo' form='$formId'>";
                            echo "<input type='hidden' value='".$id_PEDIDOS."' name='id_PEDIDOS' form='$formId'>";
                            echo "<input type='hidden' value='".$fila["Costo"]."' name='Costo' form='$formId'>";
                            echo "<input type='number' name='cantidad' value='1' min='1' form='$formId'>";
                        echo "</td>";
                        echo "<td><input type='submit' value='Agregar' form='$formId'></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <div style="margin-top: 40px; text-align: right;">
            <a href="frompedido.php" class="btn-nuevo">Generar Nuevo Pedido</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>