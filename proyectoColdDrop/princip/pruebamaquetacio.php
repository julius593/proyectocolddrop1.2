<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

    
        body {
            background-color: #ffffff; 
            display: grid;
            grid-template-rows: 100px 1fr 100px; 
            grid-template-columns: 30% 70%;
            grid-template-areas:
                "uno uno"
                "tres tres"
                "cua cua";
            gap: 5px;
            min-height: 100vh;
        }

      
        header {
            background-color: #0056b3; 
            color: #ffffff; 
            grid-area: uno;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 10px;
        }

        section {
            background-color: #ffffff; 
            grid-area: tres;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        
        form {
            background-color: #f8f9fa; 
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 5px;
            width: 100%;
            max-width: 350px; 
        }

        form label {
            display: block;
            color: #000000; 
            margin-bottom: 5px;
        }

        form input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #000000;
        }

        form input[type="submit"] {
            background-color: #000000; 
            color: #ffffff; 
            margin-top: 10px;
            cursor: pointer;
            border: none;
        }

       
        a {
            background-color: #0056b3; 
            color: #ffffff; 
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
        }

       
        footer {
            background-color: #000000;
            color: #ffffff; 
            grid-area: cua;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

      
        @media (max-width: 700px) {
            footer {
                background-color: #0056b3;
            }
            body {
                grid-template-rows: auto 1fr auto;
                grid-template-columns: 100%;
                grid-template-areas:
                    "uno"
                    "tres"
                    "cua";
            }
        }
    </style>
</head>
<body>

    <header>
        <?php include("inicio.php"); ?>
    </header>
    
    <section>
        <form action="bdvali.php" method="post">
            <label>Nombre:</label>
            <input type="text" name="usuario"/>
            
            <label>Contraseña:</label>
            <input type="password" name="contra"/>
            
            <input type="submit" name="enviar" value="Enviar"/>
        </form>

        <a href="tienda.php">Ir a la tienda</a>
    </section>

    <footer>4</footer>

</body>
</html>