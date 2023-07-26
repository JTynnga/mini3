<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["passw"] = $_POST["passw"];

    $email_u = $_SESSION["email"];
    $passw_u = $_SESSION["passw"];
    echo $email_u;

    require("connection.php");

    $hash = password_hash($pass_u, PASSWORD_DEFAULT);

    $repeEmail = "SELECT * FROM usuarios WHERE correo = '$email_u'";

    $resultTryLg = $mysqli->query($repeEmail);
    $datosTryLg = $resultTryLg->fetch_assoc();
    $datosTryLgPass = $datosTryLg["clave"];

    if (password_verify($passw_u, $datosTryLgPass)) {
        $_SESSION["errorx"] = "Are you trying to login?";
        header("Location: index.php");
        die();
    } else {
        $trySame = $mysqli->query($repeEmail);

        $numFilasS = $trySame->num_rows;

        if ($numFilasS === 1) {
            $_SESSION["errorx"] = "This account already exist.";
            header("Location: index.php");
            die();
        } else {
            $insertarUsers_Info = "INSERT INTO usuarios (correo, clave) VALUES
            ('$email_u','$hash');";

            $ejecutarDatos = $mysqli->query($insertarUsers_Info);

            $showInfo = "SELECT * FROM usuarios WHERE correo = '$email_u' AND password = '$hash';";

            $resultado = $mysqli->query($showInfo);

            $datos = $resultado->fetch_assoc();
            $_SESSION["datos"] = $datos;

            $_SESSION["dato_id"] = $_SESSION["datos"]["id"];
            $_SESSION["dato_imagen"] = $_SESSION["datos"]["imagen"];
            $_SESSION["dato_nombre"] = $_SESSION["datos"]["nombre"];
            $_SESSION["dato_bio"] = $_SESSION["datos"]["biograf"];
            $_SESSION["dato_telef"] = $_SESSION["datos"]["telef"];
            $_SESSION["dato_email"] = $_SESSION["datos"]["correo"];
            $_SESSION["dato_passw"] = $_SESSION["datos"]["clave"];

            header("Location: registrar.php");
        }
    }
}




/*<!-- 
?php
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
-->*/