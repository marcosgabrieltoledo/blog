<?php
require_once "conexion.php";
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];

$obj = new connection();
$con = $obj->connect():
$instruccion_sql = "INSERT INTO contactos (nombre, apellido, email) values ('($nombre, $apellido, $email)"
$result = $con->prepare($instruccion_sql);
$result->execute();

echo "Los datos ($apellido),($nombre) fueron procesados satisfactoriamente"

echo "<script>document.location.href=pagina;</script>"
?>