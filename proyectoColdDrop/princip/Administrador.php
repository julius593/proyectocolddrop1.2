<link rel="stylesheet" href="vendedor.css">
</head>
<body>
         
    <div class="pantalla-principal">
       
        <header class="barra-superior">
            <h1>ADMINISTRADOR</h1>
        </header>

        <main class="seccion-centro">
            <div class="col-perfil">
                <h1 class="titulote">DATOS <br> PERSONALES</h1>
                <img src="data:image/jpeg;base64,/9j/4AAQ..." alt="Santiago Mendoza" class="foto-admin">
                
                <ul class="lista-datos-santi">
                    <?php session_start(); ?>
                    
                    <p>Nombre: <?php echo ($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Invitado'; ?></p>
                    <p>Fecha de nacimiento: XX/XX/XX</p>
                    <p>CI: XXXXXXXX</p>
                    <p>ID número de celular: XXXXX</p>
                </ul>
            </div>

            <div class="col-graficos">
                <h1 class="titulote">Reportes de venta</h1>
                <p style="color: #888; font-size: 14px; margin-bottom: 30px;">Reporte semanal de ventas</p>
                <img src="data:image/png;base64,iVBORw0K..." alt="Reportes" style="width: 100%; max-width: 500px;">
            </div>

            <div class="col-menu-links">
                <a>MENU DE ADMINISTRADORES</a>
               
                <div class="grupo-links">
                    <a href="1.html">GESTIONAR USUARIOS</a>
                    <a href="gestionar_productos.html">GESTIONAR PRODUCTOS</a>
                    <a href="visualizar_errores.html">VISUALIZAR ERRORES DEL SISTEMA</a>
                </div>

                <a href="notificaciones.html" class="link-subtitulo">Notificaciones</a>
               
                <div class="grupo-links">
                    <a href="horarios.html">HORARIOS</a>
                    <a href="postulantes.html">POSTULANTES</a>
                    <a href="direccion.html">DIRECCION</a>
                </div>
                <a href="cerrarsesion.php"><button>Cerrar Sesion</button></a>
            </div>
        </main>
        
        <footer class="barra-inferior">
            <p>"ColdDrop no es solo ropa, es la actitud de quienes se atreven a destacar..."</p>
        </footer>

    </div>
</body>
