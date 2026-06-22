<?php
include_once '../conexion.php';
$sql = "SELECT * FROM productos WHERE Tipo = 'Polera'";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>

header{
    grid-area: header;
                display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f8f8;
            font-family: "Madimi One", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: black;
            font-size: 18px;
}
       .dropdown {
            display: none;
            position: absolute;
            background-color: #f8f8f8;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: black;
        }
        .dropdown a:hover {
            background-color: #ddd;
        }
        #menu-toggle:checked + #menu-label + .dropdown {
            display: block;
        }
        .btn-carrito {
            font-family: "Madimi One", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: black;
            transition: all 0.7s;
       }
       .btn-carrito:hover {
            background-color: #111;
            color: #fff;
            padding: 10px;
            border-radius: 10px;
        }
        .carrito {
            margin-right: 20px;
            font-size: 20px;
            color: black;
    }
    .menu{
        transition: all 0.4s;  
        color: black;    
    }
    .menu:hover{
            background-color: #111;
            color: #fff;
            padding: 10px;
            border-radius: 10px;      
    }
    #menu-toggle{
        display: none;
    }

footer{
    grid-area: footer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #444;
    color: #fff;
    padding: 20px 80px;

}
    .social-box{
      color:white;
      text-align:left;
    }

    .social-box h2{
      font-size:14px;
      letter-spacing:4px;
      margin-bottom:20px;
      font-weight:400;
    }

    .social-icons{
      display:flex;
      gap:20px;
    }

    .social-icons a{
      color:white;
      font-size:28px;
      text-decoration:none;
      transition:0.3s ease;
    }

    .social-icons a:hover{
      transform:translateY(-3px);
      opacity:0.7;
    }
    .listafooter{
      display:flex;
      gap:20px;
      color: #fff;
    } 
    .imagen{
    width:300px;
    height:400px;
    object-fit:cover;
    border-radius:10px;
}

    .texto{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    opacity: 0;
    transition: opacity 0.4s;
    z-index: 2;
}
.card{
        border-radius:10px;
        position: relative;
    width: 300px;
    height: 400px;
    overflow: hidden;
}


.card:hover .imagen{
    filter: brightness(20%);
    transform: scale(0.9);
}
.card:hover .texto{
    opacity: 1;
}
.card:hover{
  scale:1.05;
    opacity: 1;
    transform: scale(1.2);
    transition: all 1.4s;
}
  #imagenes{
    display:grid;
    grid-template-columns: repeat(4, minmax(420px, 12fr));
    justify-content:center;
    padding: 20px 20px;
    gap:30px;
}

    #nombrecollect{
      text-align:center;
      font-size:40px;
      color:#333;
    }
    </style>
</head>
<body>
 
     <?php include 'header.php'; ?>
    <section>
    <h1 id="nombrecollect">Nuestras Poleras</h1><br> <div id="imagenes">
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
          echo "<p>No hay poleras disponibles.</p>";
      }
      ?>
    </div>
  </section><br><br>

  <section>
    <h1 id="nombrecollect">Descubre nuestras poleras, Cold Wave T-shirt</h1><br> 
  </section><br><br>
<?php include 'footer.php'; ?>    
</body>
</html>