<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["correo"] = $_POST["email"];
    $_SESSION["clave"] = $_POST["passw"];

    $correo = $_SESSION["correo"];
    $clave  = $_SESSION["clave"];
    require("connection.php");

    $hash = password_hash($pass_u, PASSWORD_DEFAULT);
    $query = "SELECT * FROM usuarios WHERE correo='$correo' AND clave='$clave'";

    $resultado = $mysqli->query($query);
    $dpassw  = $datosTry["clave"];
    if (password_verify($clave, $dpassw)) {
        $_SESSION["errorx"] = "Are you trying to login?";
        header("Location: index.php");
        die();
    } else {
        $trySame = $mysqli->query($query);

        $numFilasS = $trySame->num_rows;

        if ($numFilasS === 1) {
            $_SESSION["errorx"] = "This account already exist.";
            header("Location: index.php");
            die();
        } else {
            $insertarUsers = "INSERT INTO usuarios (correo, clave) VALUES
            ('$correo','$hash');";

            $ejecutarDatos = $mysqli->query($insertarUsers);

            $showInfo = "SELECT * FROM usuarios WHERE correo = '$correo' AND clave = '$hash';";

            $resultado = $mysqli->query($showInfo);

            $datos = $resultado->fetch_assoc();
            $_SESSION["datos"] = $datos;

            $_SESSION["info_id"] = $_SESSION["datos"]["id"];
            $_SESSION["info_photo"] = $_SESSION["datos"]["imagen"];
            $_SESSION["info_name"] = $_SESSION["datos"]["nombre"];
            $_SESSION["info_bio"] = $_SESSION["datos"]["biograf"];
            $_SESSION["info_phone"] = $_SESSION["datos"]["telef"];
            $_SESSION["info_email"] = $_SESSION["datos"]["correo"];
            $_SESSION["info_passw"] = $_SESSION["datos"]["clave"];

            header("Location: registrar.php");
        }
    }
}
