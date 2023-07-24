<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo GET y POST</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- app login-register -->
    <section id="register">
        <h2>Join thousands of learners from around the wordl</h2>
        <h3>Master web development by making real-life projects. There are multiple paths for you to choose</h3>
        <form action="methods.php" method="post" enctype="multipart/form-data">
            <!--          <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" /><br>
            <label for="correo">Correo:</label>-->
            <div>
                <div id="img-correo">
                    <Image src={Tempo803} alt="Weather" />
                </div>

                <input type="email" id="correo" name="correo" /><br>
                <!--           <label for="contrasena">Contraseña:</label>-->
                <input type="password" id="contrasena" name="contrasena"><br>
                <!--            <label for="img">Examinar</label>
            <input type="file" name="img" id="img" />
            <br>-->
            </div>
            <input type="submit" value="enviar" />
            <h4>or continue with these social profile</h4>

        </form>
    </section>
</body>

</html>