<?php $cd=5;
include_once '../conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid #000;
            border-collapse: separate;
            
            }

            td {
            border: 1px solid #555;
            color: #000000bb;
            }
            button{
                background-color: blueviolet;
                color :white;
            }

    </style>
</head>
<body>
    <h3>El valor de la variable es: <?php echo $cd; ?></h3>
    <?php
        echo "<h2> El valor de esta etiqueta es: ".$cd."</h2>";
    ?>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Tipo</td>
            <td>Talla</td>
            <td>Color</td>
            <td>Costo_de_Produccion</td>
            <td>Stock</td>
            <td>Proveedor</td>
        </tr>
        <?php
            $sql="SELECT * FROM PRODUCTOS";
            $resultado=$conn->query($sql);
            if($resultado->num_rows >0){
                while($fila=$resultado->fetch_assoc()){
        ?>
                <tr>
                  <td><?php echo $fila['Nombre']?></td>
                  <td><?php echo $fila['Tipo']?></td>
                  <td><?php echo $fila['Talla']?></td>
                  <td><?php echo $fila['Color']?></td>
                  <td><?php echo $fila['Costo_de_Produccion']?></td>
                  <td><?php echo $fila['Stock']?></td>
                  <td><?php echo $fila['Proveedor']?></td>
                </tr>
        <?php
                }
            }
        ?>
    </table>

</body>
</html>