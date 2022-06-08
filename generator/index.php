<?php

session_start();

require_once('../assets/php/connect.php');

if (isset($_SESSION['login'])) {

    $conn = connect();

    $sql = "SELECT * FROM dane ORDER BY id DESC";
    $result = $conn->query($sql);

    $conn->close();
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
        <meta name="robots" content="noindex">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../assets/js/scripts.js" async defer></script>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="page">
        <section id="header">
            <a href="/"><img class="logo" src="../assets/img/logo_white.png" alt="logo WeNet" /></a>
            <h1 class="heading">Generator tekstów na strony informacyjne dla sklepów E-commerce</h1>
        </section>

        <section id="generator" style="width:100%;">
            <div class="nav">
                <div class="heading-container">
                    <h2 class="heading-container__heading">Dostępne <span>firmy:</span></h2>
                </div>
                <div class="searchcompany">
                    <input type="search" id="search" placeholder="&#xF002; Wyszukaj klienta " style="font-family:Arial, FontAwesome" data-search>
                </div>
            </div>

            <div class="companies">
                <form id="show" class="form" action="../wyniki/index.php" method="POST"></form>
                <form id="edit" class="form" action="../edycja/index.php" method="POST"></form>
                <form id="remove" class="form" action="../assets/php/delete.php" method="POST"></form>

                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="buttons">
                        <div class="buttons__first">
                            <button form="show" class="company" name="id" value=<?php echo $row['id']; ?>>
                                <?php echo $row['companyname']; ?>
                            </button>
                        </div>
                        <div class="buttons__second">
                            <button name="id" form="edit" class="edit" value=<?php echo $row['id']; ?>><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <button name="id" form="remove" class="remove" value=<?php echo $row['id']; ?>><i class="fa fa-times" aria-hidden="true"></i></button>
                        </div>
                    </div>
                <?php
                }
                ?>
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