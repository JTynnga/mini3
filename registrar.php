<?php
session_start();
if (!isset($_SESSION["datos"])) {
    echo "USUARIO NO REGISTRADO !";
    die();
} ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body>
    <section id="container">
        <img class="imgChallen" src="./images/devchallenges.svg" alt="devchallenges.svg" /><br><br>
        <nav class="nav-i">
            <div class="img-ch">
                <img src="./images/devchallenges.svg" alt="devchallenges.svg" />
            </div>
            <div id="open" class=" open-i">
                <div class="open-ii">
                    <?php
                    echo "<img class='img-i' src='data:image/jpg; base64," . base64_encode($_SESSION["dato_imagen"]) . "'>"; ?>
                </div>
                <p class="collapse"><?php echo $_SESSION["dato_nombre"] ?></p>
                <svg id="spin" class=" collapse1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black"
                    viewBox="-8 0 30 10">
                    <path
                        d="M15.434 1.235A2 2 0 0 0 13.586 0H2.414A2 2 0 0 0 1 3.414L6.586 9a2 2 0 0 0 2.828 0L15 3.414a2 2 0 0 0 .434-2.179Z" />
                </svg>

            </div>
            <ul id="toggle">
                <div class="infop">
                    <a href="registrar.php">
                        <svg class="svg-i" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="gray"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                        <li class="profile">My
                            Profile</li>
                    </a>
                </div>

                <div class="info-i">
                    <a href="registrar.php" class="registrar>
                            <svg class=" icon-r" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="gray"
                        viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <li class="group">
                            Group Chat
                        </li>
                    </a>
                </div>

                <div class="logout">
                    <a href="logout.php">
                        <svg class="svg-ii" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 16">
                            <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <li class="li-i">
                            Log out
                        </li>
                    </a>
                </div>

            </ul>
        </nav>
        <form class="forma-i" action="registar.php">
            <p class="person-i">Personal info</p>
            <p class="basic-i">Basic info, like your name and photo</p>

            <div class="prof-i">
                <div class="prof-ii">
                    <div>
                        <p class="text-i">Profile</p>
                        <p class="text-ii">Some info may be visible to other people</p>
                    </div>
                    <button class="boton-i" type="submit">Edit</button>
                </div>
                <div class="photo-i">
                    <p class="photo-ii">PHOTO</p>
                    <div class="photo-iii">
                        <?php
                        echo "<img class='img-i' src='data:image/jpg; base64," . base64_encode($_SESSION["dato_imagen"]) . "'>"; ?>
                    </div>
                </div>

                <div class="nombre-i">
                    <p class="nombre-ii">NAME</p>
                    <input class="i-nombre" type="text" value="<?php echo $_SESSION["dato_nombre"] ?>" size="20"
                        placeholder="Escriba nombres y apellidos" disabled>
                </div>

                <div class="bio-i">
                    <p class="bio-ii">BIO</p>
                    <input class="i-bio" type="text" value="<?php echo $_SESSION["dato_bio"] ?>"
                        placeholder="Escriba nombres y apellidos" disabled>
                </div>

                <div class="phone-i">
                    <p class="phone-ii">PHONE</p>
                    <input class="i-phone" type="text" value="<?php
                     $_SESSION["dato_telef"] ?>" placeholder="Escriba su telefono" disabled>
                </div>

                <div class="email-i">
                    <p class="email-ii">EMAIL</p>
                    <input class="i-email" type="text" value="<?php echo $_SESSION["dato_correo"] ?>"
                        placeholder="Escriba su email" disabled>
                </div>

                <div class="passw-i">
                    <p class="passw-ii">PASSSWORD</p>
                    <input class="i-passsw" type="password" value="<?php echo $_SESSION["dato_clave"] ?>"
                        placeholder="Escriba su password" size="20" disabled>
                </div>
            </div>
            <div class="footer">
                <p>create by <u><a href="https://github.com/joseynga"> JoseYnga </a></u></p>
                <p>devChallenges.io</p>
            </div>

        </form>






        <form action="methods.php" method="post" enctype="multipart/form-data">

            <h2>Join thousands of learners from around the world</h2><br>
            <h3>Master web development by making real-life projects. There are multiple paths for
                you to choose</h3><br><br>

            <div id="email">
                <img class="imgEmail" src="./images/email.svg" alt="email.svg" />
                <input class="inpEmail" type="text" name="email" placeholder="Email" required />
            </div><br><br>

            <div id="passw">
                <img class="imgPassw" src="./images/password.svg" alt="passw.svg" />
                <input class="inpPassw" type="password" name="passw" placeholder="Password" required />
            </div><br><br>

            <p>
                <!--&#160;-->
                <?php
                if (isset($_SESSION["errorx"])) {
                    echo $_SESSION["errorx"];
                };
                unset($_SESSION["errorx"]);
                ?>
            </p>
            <button class="botonEnv" type="submit" name="start">Star coding now</button><br><br><br>

            <div id="continue">
                <p>or continue with these social profile,</p>
            </div><br><br>

            <div class="botones">
                <a href="#"><img src="./images/Google.svg" alt="google.svg" /></a>
                <a href="#"><img src="./images/Facebook.svg" alt="Facebook.svg" /></a>
                <a href="#"><img src="./images/Twitter.svg" alt="Twitter.svg" /></a>
                <a href="#"><img src="./images/Gihub.svg" alt="Gihub.svg" /></a>
            </div><br><br>
            <div class="member">
                <p>Already a member? </p>
                <p><a href="./login.php">&#160;Login</a></p>
            </div>
        </form>
        <div class="footer">
            <p>create by <u><a href="https://github.com/joseynga"> JoseYnga </a></u></p>
            <p>devChallenges.io</p>
        </div>
    </section>

</body>

</html>