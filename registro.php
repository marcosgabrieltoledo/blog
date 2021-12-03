<?php
include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['asunto']) >=1 && strlen($_POST['mensaje']) >=1) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $asunto = trim($_POST['asunto']);
        $mensaje = trim($_POST['mensaje']);
        $consulta = "INSERT INTO contacto(nombre, email, asunto, mensaje) VALUES ('$nombre','$email','$asunto','$mensaje')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3>¡El formulario se envió correctamente!</h3>
            <?php
        } else {
            ?>
            <h3>Ocurrió un error</h3>
            <?php
        }
    }   else {
            ?>
            <h3>Por favor complete los campos</h3>
            <?php
    }

}

?>