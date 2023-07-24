<?php
require("connection.php");
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["clave"];
//$imagen="";
if (isset($_FILES["img"])) {
    require("connection.php");
    $imagen = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
}

$imagen = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));

$query = "INSERT INTO usuarios (nombre,correo,clave,imagen) VALUES ('$nombre','$correo','$clave','$imagen')";

$resultado = $mysqli->query($query);
print_r($resultado);
