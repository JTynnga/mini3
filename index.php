<?php session_start(); ?>
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
        <form action="methods.php" method="post" enctype="multipart/form-data">
            <img class="imgChallen" src="./images/devchallenges.svg" alt="devchallenges.svg" /><br><br>

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
                <p><a href="./logindb.php">&#160;Login</a></p>
            </div>
        </form>
        <div class="footer">
            <p>create by <u><a href="https://github.com/joseynga"> JoseYnga </a></u></p>
            <p>devChallenges.io</p>
        </div>
    </section>

</body>

</html>