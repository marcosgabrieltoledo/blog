<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Music Hall - Contacto</title>
</head>
<body>
    <a href="index.html"><img src="img/logo.png" alt="Music Hall logo" height="150px"></a>
    <h1>Formulario de Contacto</h1>
    
    <!-- Con el atributo "action" voy a llamar a un archivo php. 
        1. En ese archivo va a estar la conexión a la base de datos.
        2. Recuperar (tomar) los datos del formulario 
        3. Ejecutar el insert (sql)


        -->
    
    <form id="" method="post" action="registro.php" class="container g-3 needs-validation" novalidate>

    <!-- 
            Configuracion del formulario

            1. Metodo POST
            2. action="contancto.php"
            3. Revisar y/o configurar los atributos name. Si no esta el atributo name, el servidor no va a ser capaz de tomar el dato

    -->
        <div class="form-group">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" maxlength="45" required class="form-control">
            <div class="invalid-feedback">
                Ingrese su nombre.
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" maxlength="45" required class="form-control">
            <div class="invalid-feedback">
                Ingrese un email válido.
            </div>
        </div>
        
        <div class="form-group">
            <label for="asunto">Asunto: </label>
            <input type="text" name="asunto" maxlength="45" required class="form-control">
            <div class="invalid-feedback">
                Ingrese el asunto. No puede tener más de 45 caracteres.
            </div>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje: </label>
            <textarea name="mensaje" class="form-control" maxlength="255" required cols="30" rows="5"></textarea>

        </div>

        <input type="submit" name="enviar" value="Enviar.">
    </form>


    <script src="js/bootstrap.bundle.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

     // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

            form.classList.add('was-validated')
        }, false)
     })
    })()
    </script>
</body>
</html>