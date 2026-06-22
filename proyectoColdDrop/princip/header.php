<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
header{
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
    #logoh {
        width: 200px;
        height: auto;
    }
</style>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Madimi+One&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
         <header>
        <div>
            <a href="inicio.php"><img id="logoh" src="../imagenes/Captura_de_pantalla_2026-04-23_121404-removebg-preview.png" alt=""> </a></div>
        <div>
            <input class="menu" type="checkbox" id="menu-toggle">
            <label class="menu" for="menu-toggle" id="menu-label">Menu▾</label>
             <nav class="dropdown">
             <a href="hoodeis.php" class="menu">Hoodies</a>
             <a href="poleras.php" class="menu">Poleras</a>
             <a href="pantalones.php" class="menu">Pantalones</a>
             <a href="shorts.php" class="menu">Shorts</a>
            </nav>
        </div>
        <div>
            <a class="menu" href="nosotros.php">Nosotros</a>
        </div>

        <?php if (isset($_SESSION['usuario'])): ?>
            <div>
                <span class="menu" style="color: #666; cursor: default;">Hola, <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
            </div>
            <div>
                <a class="menu" href="cerrarsesion.php">Logout</a>
            </div>
        <?php else: ?>
            <div>
                <a class="menu" href="iniciosesion.php">Login</a>
            </div>
            <div>
                <a class="menu" href="../usuarios/crearusuarios.php">Register</a>
            </div>
        <?php endif; ?>
        <div class="carrito">
      <a href="micarrito.php" class="btn-carrito">
      <i class="fa-solid fa-cart-shopping"></i> Carrito</a>
        </div>
    </header>
</body>
</html>