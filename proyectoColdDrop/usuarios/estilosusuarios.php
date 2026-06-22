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
            <td>Nombre_y_Apellido</td>
            <td>Direccion</td>
            <td>Celular</td>
            <td>Rol</td>
            <td>Estado</td>
            <td>CI</td>
            
       
        </tr>
        <?php
            $sql="SELECT * FROM CLIENTES";
            $resultado=$conn->query($sql);
            if($resultado->num_rows >0){
                while($fila=$resultado->fetch_assoc()){
        ?>
                <tr>
                    <td><?php echo $fila['CI']?></td>
                  <td><?php echo $fila['Nombre']?></td>
                  <td><?php echo $fila['Direccion']?></td>
                  <td><?php echo $fila['Celular']?></td>
                  <td><?php echo $fila['Rol']?></td>
                   <td><?php echo $fila['Estado']?></td>
                   
                </tr>
        <?php
                }
            }
        ?>
    </table>

</body>
</html>