<?php

session_start();

if (isset($_SESSION['login'])) {

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
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
        <meta name="robots" content="noindex">
    </head>

    <body class="page">
        <section id="header">
            <a href="/"><img class="logo" src="../assets/img/logo_white.png" alt="logo WeNet" /></a>
            <h1 class="heading">Generator regulaminów i zgód dla sklepów E-commerce</h1>
        </section>
        <section id="main">
            <h2 class="heading">Wybierz <span>co chcesz zrobić</span></h2>
            <div class="options">
                <img src="../assets/img/strzalka-lewa.svg">
                <ul class="options__list">
                    <li><span>01. </span> Wprowadź dane firmy</li>
                    <li><span>02. </span> Dodaj do bazy danych</li>
                    <li><span>03. </span> Przejdź do generowania</li>
                </ul>
                <div class="options__option">
                    <img class="options__potion options__image" src="../assets/img/wybierz1.png" />
                    <a href="/dodawanie">Dodaj firmę do bazy danych</a>

                </div>
            </div>
            <div class="options">
                <img src="../assets/img/strzalka-prawa.svg">
                <ul class="options__list">
                    <li><span class="second-span">01. </span> Firma już dodana?</li>
                    <li><span class="second-span">02. </span> Wybierz firmę z listy</li>
                    <li><span class="second-span">03. </span> Przejdź do generowania</li>
                </ul>
                <div class="options__option">
                    <img class="options__potion options__image" src="../assets/img/wybierz2.png" />
                    <a class="options__potion options__link" href="/generator">Wygeneruj regulaminy, zgody</a>
                </div>
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

    header("Location: ../index.php");

    exit();
}

?>