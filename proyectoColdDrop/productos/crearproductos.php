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
        input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
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
    <form action="casacrearproductos.php"  id="formProductos" method="post">
<h2>PRODUCTOS</h2>
<label for="id">Codigo</label>
<input type="number" name="Codigo"  id="Codigo">
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre"  id="Nombre"> 

<label for="Tipo">Tipo</label>
<input type="text" name="Tipo"  id="Tipo">

<label for="Talla">Talla</label>
<input type="text" name="Talla"  id="Talla" >

<label for="Color">Color</label>
<input type="text" name="Color"  id="Color">

<label for="Costo">Costo</label>
<input type="number" name="Costo"  id="Costo">

<label for="Stock">Stock</label>
<input type="number" name="Stock"  id="Stock">

<label for="Imagen">Nombre de la Imagen</label>
<input type="text" name="Imagen"  id="Imagen" placeholder="ej. polera1.jpg">


<input type="submit" value="Registrar">
    </form>
    <a href="../princip/pantalones.php"  class="links">Volver al Inicio</a>
</div>


    <script>
        $(document).ready(function() {
            // Inicializar la validación en nuestro formulario
            $("#formProductos").validate({
                // Reglas de validación para cada campo (usamos el atributo 'name')
                rules: {
                    Codigo: {
                        required: true,
                        minlength: 4
                    },
                    Nombre: {
                        required: true,
                        minlength: 3
                    },
                    Tipo: {
                        required: true
                    },
                    Talla: {
                        required: true
                    },
                    Color: {
                        required: true
                    },
                    Costo: {
                        required: true,
                        number: true, // Permite decimales
                        min: 0
                    },
                    Stock: {
                        required: true,
                        digits: true,
                        min: 0
                    },
                    Imagen: {
                        required: true
                    }
                },
                // Mensajes personalizados en español
                messages: {
                    Codigo: {
                        required: "El código de producto es obligatorio.",
                        minlength: "El código debe tener al menos 4 caracteres."
                    },
                    Nombre: {
                        required: "El nombre es obligatorio.",
                        minlength: "Debe tener al menos 3 caracteres."
                    },
                    Tipo: {
                        required: "Por favor, selecciona un tipo de producto."
                    },
                    Talla: {
                        required: "Debes elegir una talla."
                    },
                    Color: {
                        required: "Debes seleccionar un color."
                    },
                    Costo: {
                        required: "El costo es obligatorio.",
                        number: "Por favor, ingresa un precio válido.",
                        min: "El costo no puede ser menor a 0."
                    },
                    Stock: {
                        required: "Ingresa la cantidad disponible.",
                        digits: "El stock debe ser un número entero.",
                        min: "El stock no puede ser negativo."
                    },
                    Imagen: {
                        required: "El nombre del archivo de imagen es obligatorio."
                    }
                }
            });
        });
    </script>
</body>
</html>