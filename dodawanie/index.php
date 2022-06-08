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
        <meta name="robots" content="noindex">
        <script src="../assets/js/formSteps.js" async defer></script>
        <script src="../assets/js/addTextarea.js" async defer></script>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="page">
        <section id="header">
            <a href="/"><img class="logo" src="../assets/img/logo_white.png" alt="logo WeNet" /></a>
            <h1 class="heading">Generator regulaminów i zgód dla sklepów E-commerce</h1>
        </section>
        <section id="form">
            <div class="generator">
                <h2 class="form__heading">Wprowadzanie <span>danych</span></h2>
                <form class="form" action="../assets/php/add.php" method="POST">
                    <div class="form__bullets" style="text-align:center;margin-top:40px;">
                        <span class="step step1"></span>
                        <span class="step step2"></span>
                        <span class="step step3"></span>
                        <span class="step step4"></span>
                        <span class="step laststep"></span>
                    </div>
                    <div class="form__tab">
                        <label>Adres URL klienta z https/http:</label>
                        <input id="compnayurl" class="generator__input" type="url" placeholder="Podaj URL" pattern="^(https://.*||http://.*)" title="url musi zawierać http/https" name="compnayurl" required value="https://test.pl/">
                        <label>Podaj pełną nazwę firmy klienta:</label>
                        <input id="companyname" class="generator__input" type="text" placeholder="Nazwę firmy" name="companyname" required value="TEstowa nazwa">
                        <label>Podaj e-mail klienta:</label>
                        <input id="email" class="generator__input" type="emial" placeholder="Adres e-mail" name="email" required value="test@test.pl">
                        <label>Podaj numer telefonu klienta w formacie "123456789":</label>
                        <input id="phone" class="generator__input" type="tel" placeholder="Numer telefonu" pattern="[0-9]{9}" title="Podaj 9 cyfr bez spacji" name="phone" required value="123123123">
                        <label>Podaj NIP klienta:</label>
                        <input id="nip" class="generator__input" type="text" placeholder="NIP firmy" pattern="[0-9]{10}" title="nip musi się składać z 10 cyfr" name="nip" required value="1231231231">

                    </div>
                    <div class="form__tab">
                        <label>Podaj regon klienta:</label>
                        <input id="regon" class="generator__input" type="text" placeholder="REGON firmy" pattern="[0-9]{9}" title="Regon musi się składać z 9 cyfr" name="regon" required value="123123123">
                        <label>Podaj ulice i numer budynku firmy klienta:</label>
                        <input id="companyadress" class="generator__input" type="text" placeholder="Ulica i numer" name="companyadress" required value="testowa 2">
                        <label>Podaj miejscowość firmy klienta:</label>
                        <input id="companycity" class="generator__input" type="text" placeholder="Adres firmy" name="companycity" required value="testowa">
                        <label>Podaj kod pocztowy firmy klienta:</label>
                        <input id="companypostcode" class="generator__input" type="text" placeholder="Kod pocztowy" pattern="\d{2}-\d{3}" title="Kod pocztowy musi mieć format 11-111" name="companypostcode" required value="11-111">
                        <label>Podaj numer konta bankowego klienta:</label>
                        <input id="companyaccountnumber" class="generator__input" type="text" placeholder="Numer konta bankowego" pattern="\d{2} \d{4} \d{4} \d{4} \d{4} \d{4} \d{4}" title="Numer konta musi składać się z 26 cyfr ze spacjami np 12 1234 1234 1234 1234 1234 1234" name="companyaccountnumber" required value="12 1234 1234 1234 1234 1234 1234">
                    </div>
                    <div class="form__tab">
                        <p class="text"><span>Wymiana i zwrtoty</span></p>
                        <p class="inputs-text">Czy wygenerować gwarancję/reklamację? </p>
                        <div class="col">
                            <label><input value="0" type="hidden" name="guarantee"><input value="1" type="checkbox" id="guarantee" name="guarantee">Gwarancja</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="complaint"><input value="1" type="checkbox" id="complaint" name="complaint">Reklamacja</label>
                        </div>
                        <p class="inputs-text">Czy chcesz wygenerować opcjonalny tekst do gwarancji/reklamacji?</p>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="guarantee_text" name="guarantee_text">Gwarancja - tekst opcjonalny</label>
                        </div>
                        <div class="additional-textarea-guarantee"></div>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="complaint_text" name="complaint_text">Reklamacja - tekst opcjonalny</label>
                        </div>
                        <div class="additional-textarea-complaint"></div>
                    </div>
                    <div class="form__tab">
                        <p class="text"><span>Płatności</span></p>
                        <div class="col">
                            <label>
                                <input value="0" type="hidden" name="cash_on_collection"><input value="1" type="checkbox" id="cash_on_collection" name="cash_on_collection">Płatność przy odbiorze w siedzibie firmy</label>
                            <label>
                                <input value="0" type="hidden" name="transfer"><input value="1" type="checkbox" id="transfer" name="transfer">Przelew na konto</label>
                        </div>
                        <div class="col">
                            <label>
                                <input value="0" type="hidden" name="cash_on_delivery"><input value="1" type="checkbox" id="cash_on_delivery" name="cash_on_delivery">Płatność za pobraniem - kurier</label>
                        </div>
                        <p class="inputs-text">Jakie klient ma płatności?</p>
                        <div class="col">
                            <label><input value="0" type="hidden" name="pay_now"><input value="1" type="checkbox" id="pay_now" name="pay_now">Pay Now</label>
                            <label><input value="0" type="hidden" name="pay_po"><input value="1" type="checkbox" id="pay_po" name="pay_po">Pay po</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="payu"><input value="1" type="checkbox" id="payu" name="payu">PayU</label>
                            <label><input value="0" type="hidden" name="p24"><input value="1" type="checkbox" id="p24" name="p24">Przelewy24</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="tpay"><input value="1" type="checkbox" id="tpay" name="tpay">Tpay</label>
                            <label><input value="0" type="hidden" name="eservice"><input value="1" type="checkbox" id="eservice" name="eservice">eService</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="imoje"><input value="1" type="checkbox" id="imoje" name="imoje">Płatności imoje ING</label>
                        </div>
                        <p class="inputs-text">Czy chcesz wprowadzić niestandardowy tekst?</p>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="payment_text" name="payment_text">Niestandardowy tekst</label>
                        </div>
                        <div class="additional-textarea-payment"></div>
                    </div>
                    <div class="form__tab">
                        <p class="text"><span>Dostawy<span></p>
                        <div class="col">
                            <label><input value="0" type="hidden" name="self_pickup"><input value="1" type="checkbox" id="self_pickup" name="self_pickup">Odbiór osobisty w siedzibie firmy</label>
                        </div>
                        <div class="additional-textarea-selfpickup"></div>
                        <p class="inputs-text">Jakich klient ma przewoźników?</p>
                        <div class="col">
                            <label><input value="0" type="hidden" name="apaczka"><input value="1" type="checkbox" id="apaczka" name="apaczka">Apaczka</label>
                            <label><input value="0" type="hidden" name="dhl"><input value="1" type="checkbox" id="dhl" name="dhl">DHL</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="dpd"><input value="1" type="checkbox" id="dpd" name="dpd">DPD</label>
                            <label><input value="0" type="hidden" name="dpd_pickup"><input value="1" type="checkbox" id="dpd_pickup" name="dpd_pickup">DPD Pickup</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="fedex"><input value="1" type="checkbox" id="fedex" name="fedex">Fedex</label>
                            <label><input value="0" type="hidden" name="furgonetka"><input value="1" type="checkbox" id="furgonetka" name="furgonetka">Furgonetka</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="inpost_kurier"><input value="1" type="checkbox" id="inpost_kurier" name="inpost_kurier">Inpost kurier</label>
                            <label><input value="0" type="hidden" name="inpost_paczkomaty"><input value="1" type="checkbox" id="inpost_paczkomaty" name="inpost_paczkomaty">Inpost paczkomaty</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="orlen"><input value="1" type="checkbox" id="orlen" name="orlen">Orlen paczka</label>
                            <label><input value="0" type="hidden" name="poczta_polska"><input value="1" type="checkbox" id="poczta_polska" name="poczta_polska">Poczta Polska</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="ups"><input value="1" type="checkbox" id="ups" name="ups">UPS</label>
                            <label><input value="0" type="hidden" name="self_delivery"><input value="1" type="checkbox" id="self_delivery" name="self_delivery">Transport własny</label>
                        </div>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="special_transport" name="special_transport">Transport z zawężeniem dostawy</label>
                        </div>
                        <div class="additional-textarea-special-transport"></div>
                        <p class="inputs-text">Czy chcesz wprowadzić niestandardowy tekst?</p>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="delivery_text" name="delivery_text">Niestandardowy tekst</label>
                        </div>
                        <div class="additional-textarea-delivery"></div>
                    </div>
                    <div class="form__btn">
                        <div>
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Wstecz</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Dalej</button>
                        </div>
                    </div>

                </form>
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