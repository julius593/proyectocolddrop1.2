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
        body {
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
  font-family: "Lobster", sans-serif;
  font-weight: 400;
  font-style: normal;}
        a{
    text-decoration: none;
    color: white;
}
header{
    grid-area: header;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
        .menu{
  font-family: "Madimi One", sans-serif;
  font-weight: 400;
  font-style: normal;
  color: black;
  transition: all 0.7s;
}
.menu:hover {
  background-color: #111;
  color: #fff;
  padding: 10px;
  border-radius: 10px;
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
      border-radius:10px;
      transition:all 0.4s;
    }
    .imagen:hover{
      transform:scale(1.05);
      box-shadow:0 4px 8px rgba(0,0,0,0.2);
    }
    #imagenes{
      display:flex;
      flex-wrap:wrap;
      gap:100px;
      row-gap: 100px;
      justify-content:space-between;

    }
    #nombrecollect{
      text-align:center;
      font-size:40px;
      color:#333;
    }
    </style>
</head>
<body>
      <header>
    <div ><img src="Captura_de_pantalla_2026-04-23_121404-removebg-preview.png" alt=""></div>
      <a class="menu" href="">Collection</a>
      <a class="menu" href="">Hoodies</a>
      <a class="menu" href="">Poleras</a>
      <a class="menu" href="">Pantalones</a>
      <a class="menu" href="">Iniciar sesion</a>
      <a class="menu" href="">Registrarse</a>
    <div class="carrito">
      <a href="carrito.html" class="btn-carrito">
      <i class="fa-solid fa-cart-shopping"></i> Carrito</a>
    </div>
  </header>
  <section>
    <h1 id="nombrecollect">Cold Wave</h1><br> <div id="imagenes">
    <img class="imagen" src="https://i.pinimg.com/1200x/8a/fd/ca/8afdca5e0f351ad24da787254354ac52.jpg" alt="">
    <img class="imagen" src="https://i.pinimg.com/1200x/33/4c/01/334c015a6ab2ba504ba89c625f98b14c.jpg" alt="">
    <img class="imagen" src="https://i.pinimg.com/1200x/cc/f7/73/ccf7738a6e59f66d1fd7782f9b47486d.jpg" alt="">
    <img class="imagen" src="https://i.pinimg.com/1200x/c4/7a/fe/c47afe49ababde0ccefd7b8741a27d04.jpg" alt="">
    <img class="imagen" src="https://i.pinimg.com/1200x/17/2b/94/172b94f1f3a7bab0482cec986c644552.jpg" alt="">
    <img class="imagen" src="https://i.pinimg.com/736x/33/89/1f/33891fdb5cacceb4a6e32d3608ad7280.jpg" alt="">
    <img class="imagen" src="https://i.pinimg.com/736x/f3/19/07/f319078be339dca33718af02dafeefa7.jpg" alt="">
    <img class="imagen" src="https://i.pinimg.com/1200x/d8/c4/3e/d8c43e5dcfb680d0203c6800670f4c68.jpg" alt=""></div>
  </section><br><br>
    <footer>
    <div><img src="Captura_de_pantalla_2026-04-23_121404-removebg-preview.png" alt=""></div>
    <div>
      <h4>Comprar</h4>
      <li><a class="listafooter" href="">Colección</a></li>
      <li><a class="listafooter" href="">Hoodies</a></li>
      <li><a class="listafooter" href="">Poleras</a></li>
      <li><a class="listafooter" href="">Pantalones</a></li>
    </div>
    <div>
      <h4>Comunicate con Nosotros</h4>
      <li><a class="listafooter" href="">Gmail</a></li>
      <li><a class="listafooter" href="">Whatsapp</a></li>
    </div>
    <div class="social-box">
      <h4>Siguenos</h4>
        

    <div class="social-icons">
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-tiktok"></i></a>
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-regular fa-envelope"></i></a>
    </div>

    </div>
  </footer>
    
</body>
</html>