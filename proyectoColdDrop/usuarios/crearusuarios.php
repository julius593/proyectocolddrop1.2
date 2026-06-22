<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #7a7a7aff, #000000ff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        
        form {
            background-color: #fff;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #000000ff;
            margin-bottom: 25px;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="password"]:focus {
            border-color: #4d4d4d8e;
            outline: none;
            box-shadow: 0 0 6px rgba(104, 104, 104, 0.38);
        }

       
        input[type="submit"] {
            margin-top: 25px;
            width: 100%;
            background-color: #000000ff;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #000000ff;
        }
                .links {
    display: block;
    text-align: center;
    margin: 30px auto 0 auto;
    color: #000;
    text-decoration: none;
    font-weight: bold;
    background: #fff;
    border-radius: 8px;
    padding: 12px 0;
    width: 400px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    font-size: 16px;
    transition: background 0.3s, color 0.3s;
}
.links:hover {
    background: #eaeaea;
    color: #222;
}
.form-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

        
        @media (max-width: 480px) {
            form {
                width: 90%;
                padding: 25px;
            }
                            .links {
        width: 90%;
        padding: 10px 0;
        font-size: 15px;
    }
        }
    </style>
</head>
<body>
    <div class="form-container">
    <form action="casacrearusuarios.php" id="formUsuarios" method="post">
<h2>USUARIOS</h2>

<label for="CI">CI</label>
<input type="number" name="CI" id="CI">

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre"> 

<label for="Apellido">Apellido</label>
<input type="text" name="Apellido" id="Apellido">

<label for="Usuario">Usuario</label>
<input type="text" name="Usuario" id="Usuario">

<label for="Contrasena">Contraseña</label>
<input type="password" name="Contrasena" id="Contrasena">

<label for="Direccion">Direccion</label >
<input type="text" name="Direccion" id="Direccion">

<label for="Celular">Celular</label>
<input type="number" name="Celular"id="Celular" >

<label for="Rol">Rol</label>
<input type="text" name="Rol"id="Rol" >

<label for="Estado">Estado</label>
<input type="text" name="Estado" id="Estado">


<input type="submit" value="Registrar">
    </form>
</div>
 <script>
        $(document).ready(function() {
            // Inicializar la validación en nuestro formulario
            $("#formUsuarios").validate({
                // Reglas de validación para cada campo (usamos el atributo 'name')
                rules: {
                    CI: {
                        required: true,
                        number: true,
                        min: 0
                    },
                    Nombre: {
                        required: true,
                        minlength: 3
                    },
                    Apellido: {
                        required: true,
                        minlength: 3
                    },
                    Usuario: {
                        required: true,
                        minlength: 3
                    },
                    Contrasena: {
                        required: true,
                        minlength: 4
                    },
                    Direccion: {
                        required: true
                    },
                    Rol: {
                        required: true
                    },
                    Estado: {
                        required: true
                    },
                },
                // Mensajes personalizados en español
                messages: {
                    CI: {
                        required: "El CI es obligatorio.",
                        number: "Por favor, ingresa un número válido."
                    },
                    Nombre: {
                        required: "El nombre es obligatorio.",
                        minlength: "Debe tener al menos 3 caracteres."
                    },
                    Apellido: {
                        required: "El apellido es obligatorio.",
                        minlength: "Debe tener al menos 3 caracteres."
                    },
                    Usuario: {
                        required: "El nombre de usuario es obligatorio.",
                        minlength: "Debe tener al menos 3 caracteres."
                    },
                    Contrasena: {
                        required: "La contraseña es obligatoria.",
                        minlength: "Debe tener al menos 4 caracteres."
                    },
                    Direccion: {
                        required: "Por favor, ingresa una dirección."
                    },
                    Rol: {
                        required: "Debes elegir un Rol."
                    },
                    Estado: {
                        required: "Debes seleccionar un Estado."
                    }
                }
            });
        });
    </script>
</body>
</html>