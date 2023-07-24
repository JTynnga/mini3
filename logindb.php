<?php
require("connection.php");
$correo = $_POST["correo"];
$contrasena = $_POST["clave"];

$query = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$clave'";
$resultado = $mysqli->query($query);
$numFilas = $resultado->num_rows;
if ($numFilas == 1) {
    echo "Usuario encontrado. Bienvenido!";
} else {
    header("Location: logindb.php");
}
