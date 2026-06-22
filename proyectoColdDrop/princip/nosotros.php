<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
 
    :root {
      --negro: #ffffff;
      --gris-oscuro: #aaa;
      --gris-medio: #f0f0f0;
      --gris-borde: #808080;
      --blanco: #6b6b6b;
      --blanco-suave: #141414;
      --acento: #000000;
    }
 
    body {
      background-color: var(--negro);
      color: var(--blanco);
      font-family: 'Inter', sans-serif;
      font-weight: 300;
      line-height: 1.7;
    }
    .hero {
      padding: 100px 60px 80px;
      border-bottom: 1px solid var(--gris-borde);
      background-color: white;
    }
 
    .hero-eyebrow {
      font-size: 25px;
      letter-spacing: 4px;
      color: var(--blanco-suave);
      margin-bottom: 28px;
    }
 
    .hero h1 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(64px, 10vw, 140px);
      line-height: 0.9;
      letter-spacing: 2px;
      color: var(--blanco);
      max-width: 800px;
    }
 
    .hero h1 span {
      color: var(--acento);
    }
     .mision {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      border-bottom: 1px solid var(--gris-borde);
    }
 
    .mision-label {
      padding: 60px;
      border-right: 1px solid var(--gris-borde);
      display: flex;
      align-items: flex-start;
    }
 
    .mision-label p {
      font-size: 30px;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--blanco-suave);
      writing-mode: vertical-rl;
      transform: rotate(180deg);
    }
 
    .mision-content {
      padding: 60px;
    }
 
    .mision-content h2 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 42px;
      letter-spacing: 2px;
      margin-bottom: 24px;
      color: var(--blanco);
    }
 
    .mision-content p {
      font-size: 20px;
      color: var(--blanco-suave);
      max-width: 480px;
      line-height: 1.9;
    }
     .equipo {
      padding: 80px 60px;
      border-bottom: 1px solid var(--gris-borde);
    }
 
    .equipo-intro {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      margin-bottom: 64px;
    }
 
    .equipo-intro h2 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 52px;
      letter-spacing: 2px;
      align-self: end;
    }
 
    .equipo-intro p {
      font-size: 20px;
      color: var(--blanco-suave);
      line-height: 1.9;
      align-self: end;
    }
 
    .valores {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
    }
 
    .valor {
      padding: 40px;
      border: 1px solid var(--gris-borde);
      border-right: none;
    }
 
    .valor:last-child {
      border-right: 1px solid var(--gris-borde);
    }
 
    .valor-num {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 48px;
      color: black;
      margin-bottom: 16px;
      display: block;
    }
 
    .valor h3 {
      font-size: 25px;
      letter-spacing: 3px;
      text-transform: uppercase;
      margin-bottom: 12px;
      color: var(--blanco);
    }
 
    .valor p {
      font-size: 15px;
      color: var(--blanco-suave);
      line-height: 1.8;
    }
     .cierre {
      padding: 100px 60px;
      text-align: center;
    }
 
    .cierre h2 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(40px, 6vw, 80px);
      letter-spacing: 4px;
      margin-bottom: 32px;
      color: var(--blanco);
    }
 
    .cierre p {
      font-size: 14px;
      color: var(--blanco-suave);
      max-width: 500px;
      margin: 0 auto 40px;
      line-height: 1.9;
    }
 
    .btn {
      display: inline-block;
      padding: 16px 40px;
      border: 1px solid var(--blanco);
      color: var(--blanco);
      text-decoration: none;
      font-size: 11px;
      letter-spacing: 3px;
      text-transform: uppercase;
      transition: background 0.2s, color 0.2s;
    }
 
    .btn:hover {
      background: var(--blanco);
      color: var(--negro);
    }
    #nombre{
      font-size: 2.5rem;
      font-weight: bold;
      color: black;
    }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
      <section class="hero">
    <p class="hero-eyebrow">Quiénes somos</p>
    <h1 id="nombre">ColdDrop</h1>
    <h1>HECHO EN<br /><span>LA CALLE.</span></h1>
  </section>
 
  <section class="mision">
    <div class="mision-label">
      <p>Nuestra misión</p>
    </div>
    <div class="mision-content">
      <h2>MÁS QUE ROPA</h2>
      <p>
        ColdDrop nació para vestir a quienes viven sin pedir permiso. No hacemos ropa para aparentar —
        hacemos prendas que aguantan el ritmo de la ciudad, que se ven bien en el parche y que
        dicen algo sobre quien las usa. Nuestra misión es simple: calidad real, a precio justo,
        con identidad propia.
      </p>
    </div>
  </section>
 

 
  <section class="equipo">
    <div class="equipo-intro">
      <h2>LO QUE NOS MUEVE</h2>
      <p>
        Somos un equipo pequeño con ideas grandes. Diseñamos cada pieza pensando en quien la va a usar,
        y producimos localmente para asegurarnos de que cada detalle esté bien.
      </p>
    </div>
 
    <div class="valores">
      <div class="valor">
        <span class="valor-num">01</span>
        <h3>Autenticidad</h3>
        <p>Nada de tendencias prestadas. Cada diseño sale de nuestra propia visión, sin copiar lo que está de moda afuera.</p>
      </div>
      <div class="valor">
        <span class="valor-num">02</span>
        <h3>Calidad</h3>
        <p>Usamos materiales que duran. No nos interesa que compres cada mes — nos interesa que lo que compres te dure años.</p>
      </div>
      <div class="valor">
        <span class="valor-num">03</span>
        <h3>Comunidad</h3>
        <p>La gente que usa CColdDrop es parte de algo. No somos solo una marca — somos una forma de moverse por el mundo.</p>
      </div>
    </div>
  </section>
   <section class="cierre">
    <h2>VEN A VER LO QUE TENEMOS</h2>
    <p>La nueva colección ya está disponible. Piezas limitadas, sin reposición.</p>
    <a href="hoodeis.php" class="btn">Ver colección</a>
  </section>
    <?php include 'footer.php'; ?>  
</body>
</html>