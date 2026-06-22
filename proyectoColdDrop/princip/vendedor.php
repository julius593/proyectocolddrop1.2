<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendedor.css">
</head>
<body>

    <div class="datos-cabecera">
        <p>Nombre: <?php echo ($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Invitado'; ?></p>
        <p>Fecha de nacimiento: XX/XX/XX</p>
        <p>CI: XXXXXXXX</p>
        <p>ID número de celular: XXXXX</p>
    </div>

    <header>
        <p>VENDEDOR</p>
        <div><img width="180px" src="../imagenes/Captura_de_pantalla_2026-04-23_121404-removebg-preview.jpg" alt=""></div>
    </header>

    <nav>
        <h1 id="datos">DATOS DEL VENDEDOR</h1>
        <button>Registro de ventas</button><br>
        <button>Detalles de la venta</button><br>
        <button>Dirección de envíos</button><br>
        <button>Teléfono de usuario</button><br>
        <button>Información de la persona</button><br>
        <a href="frompedido.php"><button>Gestionar pedidos</button></a><br>
        <a href="cerrarsesion.php"><button>Cerrar Sesión</button></a>
        <div id="div5"></div>
    </nav>

    <main>
        <h1><center>PERFIL PERSONAL</center></h1>
        <div id="div3"></div>
        <p>Nombre: <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Invitado'; ?></p>
        <p>Fecha de nacimiento: XX/XX/XX</p>
        <p>CI: XXXXXXXX</p>
        <p>ID de venta: XXXXX</p>
    </main>

    <aside>
    </aside>

    <footer>
        <p>“ColdDrop no es solo ropa, es la actitud de quienes se atreven a destacar, a ser auténticos y a llevar su estilo con confianza en cada paso que dan.”</p>
        <a href="inicio.html">ColdRop.com.bo</a>
        <p>encuéntranos en</p><a href="">Instagram</a>
    </footer>
</body>
</html>