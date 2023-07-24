<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
require("connection.php");

$query = "SELECT * FROM usuarios";

$resultado = $mysqli->query($query);

while ($fila = $resultado->fetch_assoc()) {
    $datosImg = base64_encode($fila["imagen"]);
    echo $fila["nombre"] . "<br>";
    echo $fila["correo"] . "<br>";
    echo "<img src='data:image/jpg;base64, $datosImg' alt=''>";
}
