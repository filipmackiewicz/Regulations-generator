<?php

session_start();

if (!isset($_SESSION['login'])) {

?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Generator - generator polityk i zgód dla sklepów E-ecommerce</title>
        <meta name="description" content="Generator polityki prywatności, cookies, regulaminu oraz zgód">
        <meta name="author" content="Filip Mackiewicz">
        <meta name="keywords" content="generator, rodo, regulamin, polityka prywatności, polityka cookies">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/main.css">
        <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
        <meta name="robots" content="noindex">
    </head>

    <body class="page">
        <section id="header">
            <a href="/"><img class="logo" src="./assets/img/logo_white.png" alt="logo WeNet" /></a>
            <h1 class="heading">Generator regulaminów i zgód dla sklepów E-commerce</h1>
        </section>
        <section id="main">
            <h1 class="heading">Zaloguj <span>się do panelu</span></h1>
            <div id="login" class="login">

                <?php if (isset($_GET['error'])) { ?>

                    <p class="error"><?php echo $_GET['error']; ?></p>

                <?php } ?>
                <div class="login__img">
                    <img src="./assets/img/login.png" alt="ikona logowania" />
                </div>
                <form action="./assets/php/login.php" class="form" method="POST">
                    <label for="" class="form__label">Login</label>
                    <input class="form__input" type="text" placeholder="podaj mail" name="login">
                    <label for="" class="form__label">Hasło</label>
                    <input class="form__input" type="password" placeholder="Podaj hasło..." name="password">
                    <button class="form__btn">Zaloguj się</button>
                </form>
            </div>
        </section>
        <section id="footer">
            <div class="copyright">
                <p class="copyright__text">Copyright © 2022
                    <a href="https://filipmackiewicz.pl/" rel="nofollow" target="_blank" class="copyright__link">Filip Mackiewicz</a>
                </p>
            </div>
        </section>

    </body>

    </html>



<?php

} else {

    // header("Location: /login");
    header("Location: ./login");

    exit();
}

?>