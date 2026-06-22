<?php
include_once '../conexion.php';
$sql = "SELECT * FROM productos WHERE Tipo = 'Hoodie'";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColdDrop - Hoodies | Ropa Premium</title>
    <meta name="description" content="Compra nuestros hoodies premium de ColdDrop">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="hoodeis.css">
</head>
<body>
 
     <?php include 'header.php'; ?>
    <section>
    <h1 id="nombrecollect">Nuestros Hoodies</h1><br> <div id="imagenes">
      <?php
      if ($resultado && $resultado->num_rows > 0) {
          while ($fila = $resultado->fetch_assoc()) {
              $img = !empty($fila['Imagen']) ? $fila['Imagen'] : 'default.jpg';
              ?>
              <div class="card">
                <img class="imagen" src="../imagenes/<?php echo htmlspecialchars($img); ?>" alt="">
                <div class="texto">
                  <p><?php echo htmlspecialchars($fila['Nombre']); ?></p>
                  <p><?php echo htmlspecialchars($fila['Talla']) . " - $" . htmlspecialchars($fila['Costo']); ?></p>
                </div>
              </div>
              <?php
          }
      } else {
          echo "<p>No hay hoodies disponibles.</p>";
      }
      ?>
    </div>
  </section><br><br>

  <section>
    <h1 id="nombrecollect">Conoce nuestras Hoodies, Urban Style</h1><br> 
  </section><br><br>
<?php include 'footer.php'; ?>    
</body>
</html>