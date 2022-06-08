<?php

session_start();

require_once('../assets/php/connect.php');

if (isset($_SESSION['login'])) {

    $conn = connect();

    $sql = "SELECT * FROM dane WHERE id={$_POST['id']}";
    $result = $conn->query($sql);
    $result = $result->fetch_array();
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
        <script src="../assets/js/formSteps.js" async defer></script>
        <script src="../assets/js/addTextarea.js" async defer></script>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="robots" content="noindex">
    </head>

    <body class="page">
        <section id="header">
            <a href="/"><img class="logo" src="../assets/img/logo_white.png" alt="logo WeNet" /></a>
            <h1 class="heading">Generator regulaminów i zgód dla sklepów E-commerce</h1>
        </section>
        <section id="form" class="update">
            <div class="generator">
                <form class="form" action="../assets/php/update.php" method="POST">
                    <div class="form__bullets" style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                    <div class="form__tab">
                        <input name="id" value="<?php echo $result['id']; ?>" type="hidden">
                        <label>Adres URL klienta z https/http:</label>
                        <input style="background: #411D7F;" id="compnayurl" class="generator__input" type="url" placeholder="Podaj URL" pattern="^(https://.*||http://.*)" title="url musi zawierać http/https" name="compnayurl" value="<?php echo $result['compnayurl']; ?>" required>
                        <label>Podaj pełną nazwę firmy klienta:</label>
                        <input style="background: #411D7F;" id="companyname" class="generator__input" type="text" placeholder="Nazwę firmy" name="companyname" value="<?php echo htmlspecialchars($result['companyname']); ?>" required>
                        <label>Podaj e-mail klienta:</label>
                        <input style="background: #411D7F;" id="email" class="generator__input" type="emial" placeholder="Adres e-mail" name="email" value="<?php echo $result['email']; ?>" required>
                        <label>Podaj numer telefonu klienta w formacie "123456789":</label>
                        <input style="background: #411D7F;" id="phone" class="generator__input" type="tel" placeholder="Numer telefonu" pattern="[0-9]{9}" title="Podaj 9 cyfr bez spacji" name="phone" value="<?php echo $result['phone']; ?>" required>
                        <label>Podaj NIP klienta:</label>
                        <input style="background: #411D7F;" id="nip" class="generator__input" type="text" placeholder="NIP firmy" pattern="[0-9]{10}" title="nip musi się składać z 10 cyfr" name="nip" value="<?php echo $result['nip']; ?>" required>
                    </div>
                    <div class="form__tab">
                        <label>Podaj regon klienta:</label>
                        <input style="background: #411D7F;" id="regon" class="generator__input" type="text" placeholder="REGON firmy" pattern="[0-9]{9}" title="Regon musi się składać z 9 cyfr" name="regon" value="<?php echo $result['regon']; ?>" required>
                        <label>Podaj ulice i numer budynku firmy klienta:</label>
                        <input style="background: #411D7F;" id="companyadress" class="generator__input" type="text" placeholder="Ulica i numer" name="companyadress" value="<?php echo $result['companyadress']; ?>" required>
                        <label>Podaj miejscowość firmy klienta:</label>
                        <input style="background: #411D7F;" id="companycity" class="generator__input" type="text" placeholder="Adres firmy" name="companycity" value="<?php echo $result['companycity']; ?>" required>
                        <label>Podaj kod pocztowy firmy klienta:</label>
                        <input style="background: #411D7F;" id="companypostcode" class="generator__input" type="text" placeholder="Kod pocztowy" pattern="\d{2}-\d{3}" title="Kod pocztowy musi mieć format 11-111" name="companypostcode" value="<?php echo $result['companypostcode']; ?>" required>
                        <label>Podaj numer konta bankowego klienta:</label>
                        <input style="background: #411D7F;" id="companyaccountnumber" class="generator__input" type="text" placeholder="Numer konta bankowego" pattern="\d{2} \d{4} \d{4} \d{4} \d{4} \d{4} \d{4}" title="Numer konta musi składać się z 26 cyfr ze spacjami np 12 1234 1234 1234 1234 1234 1234" name="companyaccountnumber" value="<?php echo $result['companyaccountnumber']; ?>" required>
                    </div>
                    <div class="form__tab">
                        <p class="text"><span>Wymiana i zwrtoty</span></p>
                        <p class="inputs-text">Czy wygenerować gwarancję/reklamację? </p>
                        <div class="col">
                            <label><input value="0" type="hidden" name="guarantee"><input value="1" type="checkbox" id="guarantee" name="guarantee" <?php if ($result['guarantee'] == 1) { ?> checked <?php } ?>>Gwarancja</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="complaint"><input value="1" type="checkbox" id="complaint" name="complaint" <?php if ($result['complaint'] == 1) { ?> checked <?php } ?>>Reklamacja</label>
                        </div>
                        <p class="inputs-text">Czy chcesz wygenerować opcjonalny tekst do gwarancji/reklamacji?</p>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="guarantee_text" name="guarantee_text" <?php if ($result['guarantee_text'] != NULL) { ?> checked <?php } ?>>Gwarancja - tekst opcjonalny</label>
                        </div>
                        <div class="additional-textarea-guarantee"><?php if ($result['guarantee_text'] != NULL) { ?><textarea name="guarantee-textarea" class="textarea" id="guarantee-textarea" required><?php echo $result['guarantee_text']; ?></textarea><?php } ?></div>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="complaint_text" name="complaint_text" <?php if ($result['complaint_text'] != NULL) { ?> checked <?php } ?>>Reklamacja - tekst opcjonalny</label>
                        </div>
                        <div class="additional-textarea-complaint"><?php if ($result['complaint_text'] != NULL) { ?><textarea name="complaint-textarea" class="textarea" id="complaint-textarea" required><?php echo $result['complaint_text']; ?></textarea><?php } ?></div>
                    </div>
                    <div class="form__tab">
                        <p class="text"><span>Płatności</span></p>
                        <div class="col">
                            <label>
                                <input value="0" type="hidden" name="cash_on_collection"><input value="1" type="checkbox" id="cash_on_collection" name="cash_on_collection" <?php if ($result['cash_on_collection'] == 1) { ?> checked <?php } ?>>Płatność przy odbiorze w siedzibie firmy</label>
                            <label>
                                <input value="0" type="hidden" name="transfer"><input value="1" type="checkbox" id="transfer" name="transfer" <?php if ($result['transfer'] == 1) { ?> checked <?php } ?>>Przelew na konto</label>
                        </div>
                        <div class="col">
                            <label>
                                <input value="0" type="hidden" name="cash_on_delivery"><input value="1" type="checkbox" id="cash_on_delivery" name="cash_on_delivery" <?php if ($result['cash_on_delivery'] == 1) { ?> checked <?php } ?>>Płatność za pobraniem - kurier</label>
                        </div>
                        <p class="inputs-text">Jakie klient ma płatności?</p>
                        <div class="col">
                            <label><input value="0" type="hidden" name="pay_now"><input value="1" type="checkbox" id="pay_now" name="pay_now" <?php if ($result['pay_now'] == 1) { ?> checked <?php } ?>>Pay Now</label>
                            <label><input value="0" type="hidden" name="pay_po"><input value="1" type="checkbox" id="pay_po" name="pay_po" <?php if ($result['pay_po'] == 1) { ?> checked <?php } ?>>Pay po</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="payu"><input value="1" type="checkbox" id="payu" name="payu" <?php if ($result['payu'] == 1) { ?> checked <?php } ?>>PayU</label>
                            <label><input value="0" type="hidden" name="p24"><input value="1" type="checkbox" id="p24" name="p24" <?php if ($result['p24'] == 1) { ?> checked <?php } ?>>Przelewy24</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="tpay"><input value="1" type="checkbox" id="tpay" name="tpay" <?php if ($result['tpay'] == 1) { ?> checked <?php } ?>>Tpay</label>
                            <label><input value="0" type="hidden" name="eservice"><input value="1" type="checkbox" id="eservice" name="eservice" <?php if ($result['eservice'] == 1) { ?> checked <?php } ?>>eService</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="imoje"><input value="1" type="checkbox" id="imoje" name="imoje" <?php if ($result['imoje'] == 1) { ?> checked <?php } ?>>Płatności imoje ING</label>
                        </div>
                        <p class="inputs-text">Czy chcesz wprowadzić niestandardowy tekst?</p>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="payment_text" name="payment_text" <?php if ($result['payment_text'] != NULL) { ?> checked <?php } ?>>Niestandardowy tekst</label>
                        </div>
                        <div class="additional-textarea-payment"><?php if ($result['payment_text'] != NULL) { ?><textarea name="payment-textarea" class="textarea" id="payment-textarea" required><?php echo $result['payment_text']; ?></textarea><?php } ?></div>
                    </div>
                    <div class="form__tab">
                        <p class="text"><span>Dostawy<span></p>
                        <div class="col">
                            <label><input value="0" type="hidden" name="self_pickup"><input value="1" type="checkbox" id="self_pickup" name="self_pickup" <?php if ($result['self_pickup'] == 1) { ?> checked <?php } ?>>Odbiór osobisty w siedzibie firmy</label>
                        </div>
                        <div class="additional-textarea-selfpickup">
                            <?php if ($result['self_pickup'] == 1) { ?>
                                <label>Podaj adres </label><textarea name="self_pickup_adress" class="textarea" id="self_pickup_adress" required><?php echo $result['self_pickup_adress']; ?></textarea>
                                <label>Podaj godziny w formacie 8:00-16:00 </label><input type="text" name="self_pickup_hours" id="self_pickup_hours" value="<?php echo $result['self_pickup_hours']; ?>" required />
                                <label>Od kiedy do kiedy np: Poniedziałek - Piątek</label><input type="text" name="self_pickup_days" id="self_pickup_days" value="<?php echo $result['self_pickup_days']; ?>" required />
                            <?php } ?>
                        </div>
                        <p class="inputs-text">Jakich klient ma przewoźników?</p>
                        <div class="col">
                            <label><input value="0" type="hidden" name="apaczka"><input value="1" type="checkbox" id="apaczka" name="apaczka" <?php if ($result['apaczka'] == 1) { ?> checked <?php } ?>>Apaczka</label>
                            <label><input value="0" type="hidden" name="dhl"><input value="1" type="checkbox" id="dhl" name="dhl" <?php if ($result['dhl'] == 1) { ?> checked <?php } ?>>DHL</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="dpd"><input value="1" type="checkbox" id="dpd" name="dpd" <?php if ($result['dpd'] == 1) { ?> checked <?php } ?>>DPD</label>
                            <label><input value="0" type="hidden" name="dpd_pickup"><input value="1" type="checkbox" id="dpd_pickup" name="dpd_pickup" <?php if ($result['dpd_pickup'] == 1) { ?> checked <?php } ?>>DPD Pickup</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="fedex"><input value="1" type="checkbox" id="fedex" name="fedex" <?php if ($result['fedex'] == 1) { ?> checked <?php } ?>>Fedex</label>
                            <label><input value="0" type="hidden" name="furgonetka"><input value="1" type="checkbox" id="furgonetka" name="furgonetka" <?php if ($result['furgonetka'] == 1) { ?> checked <?php } ?>>Furgonetka</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="inpost_kurier"><input value="1" type="checkbox" id="inpost_kurier" name="inpost_kurier" <?php if ($result['inpost_kurier'] == 1) { ?> checked <?php } ?>>Inpost kurier</label>
                            <label><input value="0" type="hidden" name="inpost_paczkomaty"><input value="1" type="checkbox" id="inpost_paczkomaty" name="inpost_paczkomaty" <?php if ($result['inpost_paczkomaty'] == 1) { ?> checked <?php } ?>>Inpost paczkomaty</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="orlen"><input value="1" type="checkbox" id="orlen" name="orlen" <?php if ($result['orlen'] == 1) { ?> checked <?php } ?>>Orlen paczka</label>
                            <label><input value="0" type="hidden" name="poczta_polska"><input value="1" type="checkbox" id="poczta_polska" name="poczta_polska" <?php if ($result['poczta_polska'] == 1) { ?> checked <?php } ?>>Poczta Polska</label>
                        </div>
                        <div class="col">
                            <label><input value="0" type="hidden" name="ups"><input value="1" type="checkbox" id="ups" name="ups" <?php if ($result['ups'] == 1) { ?> checked <?php } ?>>UPS</label>
                            <label><input value="0" type="hidden" name="self_delivery"><input value="1" type="checkbox" id="self_delivery" name="self_delivery" <?php if ($result['self_delivery'] == 1) { ?> checked <?php } ?>>Transport własny</label>
                        </div>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="special_transport" name="special_transport" <?php if ($result['special_transport_text'] != NULL) { ?> checked <?php } ?>>Transport z zawężeniem dostawy</label>
                        </div>
                        <div class="additional-textarea-special-transport">
                            <?php if ($result['special_transport_text'] != NULL) { ?>
                                <textarea name="special-transport-textarea" class="textarea" id="special-transport-textarea" required><?php echo $result['special_transport_text']; ?></textarea>
                            <?php } ?>
                        </div>
                        <p class="inputs-text">Czy chcesz wprowadzić niestandardowy tekst?</p>
                        <div class="col">
                            <label><input value="1" type="checkbox" id="delivery_text" name="delivery_text" <?php if ($result['delivery_text'] != NULL) { ?> checked <?php } ?>>Niestandardowy tekst</label>
                        </div>
                        <div class="additional-textarea-delivery">
                            <?php if ($result['delivery_text'] != NULL) { ?>
                                <textarea name="delivery-textarea" class="textarea" id="delivery-textarea" required><?php echo $result['delivery_text']; ?></textarea>
                            <?php } ?>
                        </div>
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