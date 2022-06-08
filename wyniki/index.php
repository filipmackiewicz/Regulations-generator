<?php
session_start();
require_once('../assets/php/connect.php');



if (isset($_SESSION['login'])) {


    $today = date("j-n-Y");

    $conn = connect();

    $sql = "SELECT * FROM dane WHERE id={$_POST['id']} ORDER BY id DESC";
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="robots" content="noindex">
        <script src="../assets/js/scripts.js" async defer></script>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    </head>

    <body class="page">
        <section id="header">
            <a href="/"><img class="logo" src="../assets/img/logo_white.png" alt="logo WeNet" /></a>
            <h1 class="heading">Generator tekstów na strony informacyjne dla sklepów E-commerce</h1>
        </section>
        <section id="result">
            <div class="nav">
                <h2 class="nav__heading"><?php echo $result['companyname'] ?></h2>
                <div class="tooltip">
                    <p class="tooltip__info">Dodawnaie płatności <br /> i wysyłki ze zdjęciami</p>
                    <div class="tooltip__icon"><i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="tooltip__text">
                            <p class="tooltip-text__info">Aby wrzucić płatności i wysyłki ze zdjęciami należy wrzucić poniższe zdjęcia do katalogu
                                <span>/img/cms</span>
                            </p>
                            <p class="tooltip-text__link">

                                <a href="../assets/imgcms.7z" target="_blank">
                                    <i class="fa fa-download" aria-hidden="true"></i>POBIERZ ZDJĘCIA</a>
                            </p>
                    </div>

                </div>

            </div>

            <div class="generated">
                <div class="cookies">
                    <div class="generated-title">
                        <p class="generated-title__text">Polityka Cookies</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.cookies textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.cookies','Polityka Cookies');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea readonly class="generated__textarea"><p>Korzystamy z plików cookies w celu poprawienia efektywności i zaproponowania Użytkownikowi coraz doskonalszych funkcjonalności Sklepu internetowego <a href="<?php echo $result['compnayurl'] ?>"><?php echo explode('//', $result['compnayurl'])[1] ?></a> (dalej jako Sklep internetowy) oraz bardziej dopasowanych do Użytkownika treści. W celu zapewnienia przejrzystości naszych działań przyjęliśmy niniejszą Politykę Cookies, która określa szczegółowe zasady korzystania przez nasz Sklep internetowy z plików cookies oraz podobnych technologii.</p>
                 <p>Dane za pomocą plików cookies oraz innych podobnych technologii gromadzone są przez <strong><?php echo $result['companyname'] ?>, <?php echo $result['companyadress'] ?>,
                     <?php echo $result['companypostcode'] ?> <?php echo $result['companycity'] ?>, NIP: <?php echo $result['nip'] ?>, REGON: <?php echo $result['regon'] ?>.</strong></p>
                 <p>Użytkownikiem jest każda osoba, której dane dotyczą, korzystająca z naszego Sklepu internetowego oraz innych powiązanych z nim witryn, komunikacji oraz usług. (dalej jako Użytkownik).</p>
                 <ol style="list-style-type: upper-roman;">
                 <li><strong>PLIKI COOKIES I PODOBNE TECHNOLOGIE</strong><br />Pliki cookies („ciasteczka”) to fragmenty kodu, które są plikami tekstowymi odpowiadającymi zapytaniom HTTP kierowanym do naszego serwera. Pliki te zapisywane są przez każdą przeglądarkę, z której Użytkownik odwiedza nasz Sklep internetowy. Dzięki informacjom zawartym w plikach cookies wiemy, w jaki sposób Użytkownicy korzystają z naszego Sklepu internetowego.<br />W Sklepie internetowym wykorzystywane są dwa rodzaje plików cookies:
                 <ul style="list-style-type: disc; margin-left: 30px;">
                 <li><strong>Cookies sesyjne</strong> – są to pliki tymczasowe, które pozostają na urządzeniu Użytkownika aż do opuszczenia przez niego Sklepu internetowego lub wyłączenia przeglądarki internetowej. W takim przypadku informacje zapisane w plikach cookies sesyjnych są automatycznie usuwane.</li>
                 <li><strong>Cookies stałe (permanentne)</strong> – są to pliki, które pozostają na urządzeniu Użytkownika przez określony w parametrach plików cookies okres, także po opuszczeniu Sklepu internetowego, lub do momentu ich ręcznego usunięcia.</li>
                 </ul>
                 W obszarze Sklepu internetowego wykorzystywane są również inne dostępne technologie, pozwalające na zapisywanie informacji w przeglądarce w odpowiednich magazynach danych (Session Storage, Local Storage), a także umieszczane są w fragmenty kodów narzędzi analitycznych dostarczanych przez innych dostawców, które umożliwiają zapisanie plików cookies w domenach tych usług. Aktualna lista naszych Zaufanych Partnerów, z których usług korzystamy lub których technologie umieszczamy w Sklepie internetowym dostępna jest tutaj.<br />Pliki cookies oraz inne podobne technologie służą nam do zapewnienia optymalnej obsługi wizyty Użytkownika w Sklepie internetowym oraz umożliwiają szybszy i łatwiejszy dostęp do informacji. Przechowywana informacja lub uzyskiwanie do niej dostępu nie powoduje zmian konfiguracyjnych w urządzeniu Użytkownika i oprogramowaniu na nim zainstalowanym.<br />Informacje zawarte w plikach cookies oraz innych podobnych technologiach uznawane są za dane osobowe jedynie w powiązaniu z innymi danymi osobowymi dostępnymi na temat danego Użytkownika. My za pomocą plików cookies oraz innych podobnych technologii zbieramy o Użytkowniku jedynie anonimowe dane, służące do wygody korzystania ze Sklpeu internetowego oraz minimalizacji uciążliwości reklam. Nie zbieramy żadnych danych pozwalających na identyfikację Użytkownika.</li>
                 <li><strong>CELE KORZYSTANIA Z PLIKÓW COOKIES I PODOBNYCH TECHNOLOGII</strong><br />Korzystamy z plików cookies i innych podobnych technologii w celu rozpoznawania Użytkownika podczas jego wizyt w naszym Sklepie internetowym, zapamiętywania jego preferencji oraz wyświetlania mu odpowiednich, dostosowanych do niego treści, w tym sprofilowanych reklam. Dzięki tym rozwiązaniom interakcje Użytkownika z nami są szybsze i bardziej skuteczne. Ponadto technologie te umożliwiają nam prezentowanie Użytkownikowi dopasowanych do niego treści, bez konieczności przeprowadzania ankiet.<br />Poniżej opisane zostały poszczególne kategorie, w których wykorzystywane są pliki cookies oraz podobne technologie w naszym Sklepie internetowym:
                 <ul style="list-style-type: disc; margin-left: 30px;">
                 <li><strong>Autoryzacja</strong> – Korzystamy z plików cookies w celu uwierzytelniania Użytkownika, tj. przeprowadzenia rozpoznania Użytkownika w naszym Sklepie internetowym. Tego typu pliki cookies umożliwiają przechodzenie między stronami w witrynie bez konieczności ponownego logowania się na każdej stronie. W przypadku rozpoznania Użytkownika, przedstawiane są mu właściwe informacje odpowiadające jego preferencjom.</li>
                 <li><strong>Analiza i statystyka</strong> – Korzystamy z plików cookies i innych technologii w celu badania ruchu w Sklepie internetowym. Prowadzimy działania analityczne i statystyczne w celu stałego ulepszania oferowanych produktów i usług, zapewnienia lepszych rozwiązań oraz dodawania nowych funkcji i możliwości.</li>
                 <li><strong>Preferencje i ustawienia</strong> – Korzystamy z plików cookies w celu zapamiętywania ustawień i konfiguracji stron naszego Sklepu internetowego oraz jego poszczególnych elementów, w tym widoków stron oraz preferowanego języka Użytkownika.</li>
                 <li><strong>Reklama</strong> – Korzystamy z plików cookies i podobnych technologii w celu dostarczenia Użytkownikowi zarówno ogólnych, jak i dostosowanych (sprofilowanych) do niego reklam, w tym do remarketingu.</li>
                 </ul>
                 </li>
                 <li><strong>WYŁĄCZENIE OBSŁUGI PLIKÓW COOKIES I INNYCH TECHNOLOGII</strong><br />Przeglądarki internetowe domyślnie dopuszczają przechowywanie plików cookies. Jeśli Użytkownik nie chce otrzymywać plików cookies, może zmienić ustawienia swojej przeglądarki na komputerze lub innym urządzeniu, z którego korzysta w celu dostępu do naszego Sklepu internetowego. Dalsze korzystanie przez Użytkownika z naszego Sklepu interntowego bez zmiany ustawień oznacza, że Użytkownik zgadza się na otrzymywanie wszystkich plików cookies w naszym Sklepie internetowym.<br />Większość przeglądarek internetowych posiada funkcję, która pozwala Użytkownikowi przeglądać i usuwać pliki cookie, w tym pliki cookie w naszym Sklepie internetowym. Jednakże podkreślić należy, że brak możliwości zapisywania lub odczytywania plików cookies przez stronę internetową naszego Sklepu internetowego może uniemożliwić pełne i poprawne korzystanie z naszego Sklepu.<br />Jeżeli Użytkownik używa różnych urządzeń do uzyskania dostępu do naszego Sklepu interentowego oraz jego przeglądania (np. komputera, smartfona, tabletu) powinien upewnić się, że każda przeglądarka na każdym urządzeniu dostosowana jest do preferencji związanych z plikami cookies.<br />Sposób wyłączenia obsługi plików cookies zależy od przeglądarki, z której Użytkownik korzysta. Poniżej wskazany został sposób, w jaki Użytkownik może wyłączyć obsługę plików cookies w przeglądarce Google Chrome, Firefox, Safari, Opera oraz Internet Explorer.<ol style="list-style-type: decimal;">
                 <li><strong>Wyłączenie obsługi plików cookies w przeglądarce Google Chrome</strong>
                 <ul style="list-style-type: disc; margin-left: 30px;">
                 <li>W prawy górnym rogu przy pasku adresu przeglądarki Google Chrome wybierz Dostosowywanie i kontrolowanie Google Chrome (trzy poziome linie)</li>
                 <li>Wybierz Ustawienia.</li>
                 <li>Zjedź na dół okna i kliknij Pokaż ustawienia zaawansowane…</li>
                 <li>W sekcji Prywatność kliknij przycisk Ustawienia treści.</li>
                 <li>W sekcji Pliki cookies możesz zmienić następujące ustawienia plików cookies:
                 <ul style="list-style-type: circle;">
                 <li>Blokuj próby umieszczania na komputerze danych z witryn</li>
                 <li>Blokuj pliki cookies i dane z witryn innych firm- : zaznacz pole wyboru Ignoruj wyjątki i blokuj tworzenie plików cookies innych firm.</li>
                 </ul>
                 </li>
                 </ul>
                 Więcej informacji o ustawieniach przeglądarki Google Chrome:<br /><a href="https://support.google.com/chrome/#topic=7438008" target="_blank" rel="nofollow">https://support.google.com/chrome/#topic=7438008</a></li>
                 <li><strong>Wyłączenie obsługi plików cookies w przeglądarce Firefox</strong>
                 <ul style="list-style-type: disc; margin-left: 30px;">
                 <li>W prawym górnym rogu okna przeglądarki Firefox kliknij Otwórz menu (trzy poziome kreski) i wybierzOpcje.</li>
                 <li>Następnie wybierz zakładkę Prywatność.</li>
                 <li>Z menu rozwijanego w sekcji Historia wybierz opcję: Program Firefox: będzie używał ustawień użytkownika.</li>
                 <li>Zaznacz Akceptuj ciasteczka - by włączyć, odznacz - by wyłączyć obsługę ciasteczek.</li>
                 <li>Wybierz okres przechowywania ciasteczek:
                 <ul style="list-style-type: circle;">
                 <li>Przechowuj: aż wygasną – ciasteczko zostanie usunięte po osiągnięciu daty wygaśnięcia, która jest określana przez witrynę wysyłającą ciasteczko.</li>
                 <li>Przechowuj: do zamknięcia programu Firefox – ciasteczka przechowywane na komputerze będą usuwane przy zamknięciu Firefoxa.</li>
                 <li>Przechowuj: pytaj za każdym razem – za każdym razem, gdy witryna próbuje wysłać ciasteczko, przeglądarka wyświetli monit z prośbą o podjęcie decyzji w sprawie przechowywania ciasteczka.</li>
                 </ul>
                 </li>
               <li>Zamknij okno opcji, aby zapisać ustawienia</li>
                 </ul>
                 Więcej informacji o ustawieniach przeglądarki Firefox:<br /><a href="https://support.mozilla.org/pl/kb/Włączanie i wyłączanie obsługi ciasteczek" target="_blank" rel="nofollow">https://support.mozilla.org/pl/kb/Włączanie i wyłączanie obsługi ciasteczek</a></li>
               <li><strong>Wyłączenie obsługi plików cookies w przeglądarce Safari</strong><br /> Wybierz polecenie menu Safari &gt; Preferencje, kliknij w Prywatność, a następnie wykonaj dowolną z poniższych czynności:<br /> Zmienianie sposobu akceptowania plików cookies i danych witryn: Wybierz jedną z opcji obok etykiety Pliki cookies i dane witryn:
                 <ul style="list-style-type: disc; margin-left: 30px;">
                 <li>Zawsze blokuj:Safari nie pozwala witrynom, innym podmiotom oraz reklamodawcom na przechowywanie plików cookies oraz innych danych na Twoim Macu. Może to uniemożliwić niektórym witrynom poprawne działanie.</li>
                 <li>Tylko z bieżącej witryny: Safari przyjmuje pliki cookies oraz dane witryn tylko od aktualnie wyświetlanej witryny. Witryny internetowe często zawierają osadzone elementy pochodzące z innych źródeł. Safari nie pozwala tym innym podmiotom na przechowywanie i dostęp do plików cookie i innych danych.</li>
                 <li>Z odwiedzonych witryn: Safari przyjmuje pliki cookies oraz dane witryn tylko od tych witryn, które odwiedzasz. Safari używa istniejących plików cookies, aby ustalić, czy dana witryna została już wcześniej przez Ciebie odwiedzona. Zaznaczenie tego pola wyboru pomaga w uniemożliwianiu przechowywania na Macu plików cookies i innych danych witrynom zawierającym osadzone materiały z innych witryn.</li>
               <li>Zawsze pozwalaj: safari pozwala wszystkim witrynom, innym podmiotom oraz reklamodawcom przechowywać pliki cookies oraz inne dane na Twoim Macu.</li>
                 </ul>
                 Więcej informacji o ustawieniach przeglądarki Safari:<br /><a href="https://support.apple.com/kb/PH19214?viewlocale=pl_PL&locale=pl_PL" target="_blank" rel="nofollow">https://support.apple.com/kb/PH19214?viewlocale=pl_PL&locale=pl_PL</a></li>
                 <li><strong>Wyłączenie obsługi plików cookies w przeglądarce Opera</strong>
               <ul style="list-style-type: disc; margin-left: 30px;">
                <li>Ustawienia ciasteczek Ustawienia &gt; Preferencje &gt; Zaawansowane &gt; Ciasteczka</li>
                 <li>W przeglądarce Opera dostępne sa następujące opcje:
                 <ul style="list-style-type: circle;">
               <li>Akceptuj ciasteczka - wszystkie ciasteczka są przyjmowane (opcja ustawiona domyślnie).</li>
                 <li>Akceptuj ciasteczka tylko z witryny, którą odwiedzam - wszystkie ciasteczka pochodzące z domen innych, niż odwiedzana domena, są odrzucane.</li>
               <li>Nigdy nie akceptuj ciasteczek - wszystkie ciasteczka są odrzucane.</li>
                 </ul>
                 </li>
                 </ul>
                 Więcej informacji o ustawieniach przeglądarki Opera:<br /><a href="http://help.opera.com/Windows/12.10/pl/cookies.html" target="_blank" rel="nofollow">http://help.opera.com/Windows/12.10/pl/cookies.html</a></li>
                <li><strong>Wyłączenie obsługi plików cookies w przeglądarce Internet Explorer</strong>
                 <ul style="list-style-type: disc; margin-left: 30px;">
                 <li>W oknie przeglądarki kliknij przycisk Narzędzia, a następnie wybierz Opcje internetowe.</li>
                 <li>Kliknij kartę Prywatność, a następnie w obszarze Ustawienia przesuń suwak do najwyższego położenia, aby zablokować wszystkie pliki cookies, lub do najniższego położenia, aby zezwolić na wszystkie pliki cookies, a następnie kliknij przycisk OK.</li>
                </ul>
                Więcej informacji o ustawieniach przeglądarki Internet Explorer: <br /><a href="https://support.microsoft.com/pl-pl/products/windows?os=windows-7" target="_blank" rel="nofollow">https://support.microsoft.com/pl-pl/products/windows?os=windows-7</a><br /><br /> Nasi Zaufani Partnerzy, z rozwiązań których korzystamy w naszym Sklepie internetowym dają Użytkownikowi możliwość wyłączenia domyślnych ustawień danej usługi - czyli wyłączenie poprzez tzw. opcję opt-out. Aktualna lista naszych Zaufanych Partnerów wraz z adresami stron, na których znajdziesz więcej informacji na temat możliwości ich wyłączenia, dostępna jest tutaj.</li>
                 </ol></li>
                 <li><strong>INFORMACJE KONTAKTOWE</strong><br />W razie jakichkolwiek wątpliwości związanych z kwestiami uregulowanymi w niniejszej Polityce Cookies lub aby uzyskać informacje dotycząc niniejszej Polityki Cookies udostępniamy w naszym Sklepie internetowym formularz kontaktowy, dzięki któremu Użytkownik może skontaktować się z nami.<br />Ponadto istnieje również możliwość kontaktu drogą pocztową lub poprzez email. Dane kontaktowe to: <strong><?php echo $result['companyname'] ?>, <?php echo $result['companyadress'] ?>,
                     <?php echo $result['companypostcode'] ?> <?php echo $result['companycity'] ?>.</strong></li>
                 </ol></textarea>
                </div>
                <div class="policy">
                    <div class="generated-title">
                        <p class="generated-title__text">Polityka prywatności</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.policy textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.policy','Polityka prywatności');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea readonly class="generated__textarea"><p>Ochrona prywatności Użytkowników jest dla nas szczególnie ważna. Z tego względu Użytkownicy serwisu internetowego
                <strong><a href="<?php echo $result['compnayurl'] ?>"><?php echo explode('//', $result['compnayurl'])[1] ?></a></strong> (dalej jako Sklep internetowy) mają zagwarantowane
                najwyższe standardy ochrony prywatności. <?php echo $result['companyname'] ?> jako administrator danych osobowych dba o bezpieczeństwo
                udostępnionych przez Użytkowników danych osobowych.</p>
            <p>Mając na względnie powyższe oraz wobec wymogów wprowadzonych przez Rozporządzenie Parlamentu Europejskiego i Rady
                (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych
                osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o
                ochronie danych) (Dz.U.UE.L.2016.119.1 z dnia 2016.05.04) (dalej jako RODO) w celu zapewnienia przez <strong><?php echo $result['companyname'] ?></strong>
                bezpieczeństwa danych osobowych przyjęta została niniejsza Polityka Prywatności.</p>
            <p>Niniejsza Polityka Prywatności określa zasady przetwarzania i ochrony danych osobowych przekazanych przez
                Użytkowników w związku z korzystaniem przez nich ze Sklepu internetowego oraz innych powiązanych z nim witryn,
                komunikacji oraz usług.</p>
            <p>Użytkownikiem jest każda osoba, której dane dotyczą, korzystająca ze Sklepu internetowego oraz innych powiązanych z
                nim witryn, komunikacji oraz usług. (dalej jako Użytkownik).</p>
            <p>Administratorem danych osobowych zgromadzonych w Sklepie internetowym jest <strong><?php echo $result['companyname'] ?>, <?php echo $result['companyadress'] ?>,
                <?php echo $result['companypostcode'] ?> <?php echo $result['companycity'] ?>, NIP: <?php echo $result['nip'] ?>, REGON: <?php echo $result['regon'] ?></strong> (dalej jako Administrator).</p>
            <p>W zakresie niezbędnym do wykonania zawartej przez Użytkownika z Administratorem umowy, a także w zakresie niezbędnym
                do podjęcia przez Administratora działań na żądanie Użytkownika oraz w zakresie niezbędnym do wypełnienia ciążącego
                na Administratorze obowiązku prawnego - przetwarzanie danych osobowych Użytkownika następuje na podstawie przepisu
                prawa tj. art. 6 ust. 1 lit. b) oraz lit. c) RODO, bez konieczności wyrażenia przez Użytkownika zgody na
                przetwarzanie jego danych osobowych. W pozostałym zakresie podanie przez Użytkownika danych osobowych jest
                dobrowolne. Jednakże w zakresie w jakim zgoda na przetwarzanie danych osobowych Użytkownika została wyrażona przez
                niego wyłącznie w celach marketingowych, podanie przez Użytkownika jego danych osobowych jest dobrowolne, lecz
                odmowa wyrażenia zgody lub cofnięcie zgody uniemożliwi Administratorowi informowanie Użytkownika o nowych ofertach i
                rabatach.</p>
            <p><strong>I. ZGODA UŻYTKOWNIKA</strong></p>
            <p>Korzystanie ze Sklepu internetowego przez Użytkownika oznacza akceptację przez Użytkownika tego, że Administrator
                gromadzi, wykorzystuje i udostępnia dane nieosobowe i osobowe zgodnie z niniejszą Polityką Prywatności. Użytkownik
                ma jednakże kontrolę nad sposobem wykorzystywania oraz udostępniania jego danych, co szczegółowo zostało opisane w
                rozdziale V niniejszej Polityki Prywatności „Prawa Użytkownika”.</p>
            <p>W przypadku przetwarzania danych osobowych w oparciu o zgodę Użytkownika, ma on prawo w dowolnym momencie wycofać
                wyrażoną wcześniej zgodę. Wycofanie zgody nie wpływa na zgodność z prawem przetwarzania, którego dokonano na
                podstawie zgody przed jej wycofaniem. Administrator informuje Użytkownika o możliwości wycofania zgody przed
                wyrażeniem przez Użytkownika zgody.</p>
            <p>W przypadku, gdy nastąpi zmiana niniejszej Polityki Prywatności, a Użytkownik nadal będzie korzystał ze Sklepu
                internetowego to działanie to poczytuje się za wyrażenie zgody na aktualne warunki Polityki Prywatności.</p>
            <p><strong>II. DANE OSOBOWE PRZETWARZANE PRZEZ ADMINISTRATORA</strong></p>
            <ol style="list-style-type: decimal;">
                <li>Sposób pozyskiwania danych osobowych<ol style="list-style-type: lower-alpha;">
                        <li>Dane osobowe pozyskane bezpośrednio od Użytkownika<br /> Administrator pozyskuje dane osobowe w dwojaki
                            sposób. Pierwszym sposobem jest pozyskanie danych osobowych bezpośrednio od Użytkownika, poprzez:
                            <ul style="list-style-type: disc; margin-left: 30px;">
                                <li>wysłanie przez Użytkownika wiadomości, dzięki udostępnionemu w Sklepie internetowym formularzowi
                                    kontaktowego,</li>
                                <li>stworzenie przez Użytkownika konta klienta w Sklepie internetowym,</li>
                                <li>złożenie zamówienia na towary lub usługi w Sklepie internetowym,</li>
                                <li>kontaktowania się Użytkownika z Administratorem w celu uzyskania pomocy technicznej, złożenia
                                    reklamacji lub w innym celu.</li>
                            </ul>
                        </li>
                        <li>Dane osobowe pozyskane z innych źródeł<br /> Administrator pozyskuje również dane osobowe z innych
                            źródeł, niż bezpośrednio od Użytkownika, tj.:<br /> poprzez rejestrowanie sposobu korzystania przez
                            Użytkownika ze Sklepu internetowego za pośrednictwem plików cookies i innych technologii oraz
                            otrzymywaniu raportów o błędach lub danych użycia od oprogramowania działającego na urządzeniu
                            Użytkownika,
                            <ul style="list-style-type: disc; margin-left: 30px;">
                                <li>od partnerów, z którymi Administrator oferuje towary oraz usługi lub prowadzi wspólnie działa
                                    marketingowe.</li>
                            </ul>
                        </li>
                    </ol>
                </li>
                <li>Dane osobowe przetwarzane przez Administratora<br /> Zakres gromadzonych przez Administratora danych osobowych
                    dotyczących Użytkowników może się różnić w zależności od celu przetwarzania danych osobowych.<br />
                    Administrator gromadzi m.in. następujące dane osobowe i nieosobowe:
                    <ul style="list-style-type: disc; margin-left: 30px;">
                        <li>Login name,</li>
                        <li>Imię i nazwisko /nazwa przedsiębiorstwa/imię i nazwisko przedsiębiorcy lub imiona i nazwiska
                            przedsiębiorców działających w formie spółki cywilnej,</li>
                        <li>Adres do korespondencji,</li>
                        <li>Nr telefonu,</li>
                        <li>Adres poczty elektronicznej,</li>
                        <li>NIP,</li>
                        <li>REGON,</li>
                        <li>IP komputera,</li>
                        <li>Dane dotyczące płatności, jeśli Użytkownik dokonuje zakupu w Sklepie internetowym.</li>
                        <li>Informacje zawarte w plikach Cookies i podobnych technologii dotyczące interakcji Użytkownika ze Sklepem
                            internetowym Administratora.</li>
                    </ul>
                </li>
            </ol>
            <p>Ponadto Administrator gromadzi dane dotyczące zawartości plików i wiadomości Użytkownika, gdy jest to wymagane do
                realizacji złożonego zamówienia, udostępniania mu usługi konta klienta, w tym gromadzi: temat i treść wiadomości
                e-mail, tekst lub inną treść wiadomości błyskawicznej, nagranie dźwiękowe i filmowe wiadomości wideo, nagranie
                dźwiękowe i transkrypcja wiadomości głosowej otrzymanej przez Użytkownika lub dyktowanej przez niego wiadomości
                tekstowej.</p>
            <p>Administrator gromadzi również informacje przekazywane przez Użytkownika, w tym opinie oraz oceny towarów i usług
                oraz informacje podawane w celu uzyskania wsparcia technicznego. Ponadto w przypadku nawiązania kontaktu,
                Administrator gromadzi treść wiadomości.</p>
            <p><strong>III. SPOSÓB PRZETWARZANIA DANYCH – CELE PRZETWARZANIA DANYCH OSOBOWYCH PRZEZ ADMINISTRATORA</strong></p>
            <p>Sposób przetwarzania przez Administratora danych osobowych dotyczących Użytkownika zależy od zakresu korzystania
                przez Użytkownika ze Sklepu internetowego.</p>
            <ol style="list-style-type: decimal;" >
                <li><strong>Zamówienia, konto klienta (wykonanie umowy)</strong><br />Jeśli Użytkownik zdecyduje się złożyć
                    zamówienie na towary lub usługi prezentowane w Sklepie internetowym, Administrator będzie przetwarzać dane
                    osobowe Użytkownika w zakresie niezbędnym do zawarcia umowy sprzedaży lub umowy o świadczenie usług oraz
                    zapewnienia należytej realizacji zawartej z Użytkownikiem umowy.<br />Jeśli Użytkownik założy konto klienta w
                    Sklepie internetowym Administrator wykorzystuje dane osobowe Użytkownika w celu należytego wykonywania umowy o
                    świadczenie usług drogą elektroniczną, w tym uwierzytelniania oraz autoryzowania dostępu Użytkownika do konta
                    klienta.</li>
                <li><strong>Komunikacja (wykonanie umowy, prawnie uzasadniony cel realizowany przez
                        Administratora)</strong><br />Administrator wykorzystuje dane osobowe Użytkownika w celu komunikacji z nim w
                    spersonalizowany sposób. Komunikacja ta polega na wysyłaniu wiadomości e-mail, umieszczaniu powiadomień w
                    witrynach internetowych oraz innych środków w ramach prowadzonego Sklepu internetowego oraz świadczonej usługi
                    konta klienta, łącznie z wiadomościami tekstowymi oraz powiadomieniami push. Komunikowane Użytkownikowi treści
                    dotyczą oferowanych towarów i usług, tj. dostępności usług oraz sposobu korzystania z nich, bezpieczeństwa
                    danych osobowych, aktualizacji sieci, przypomnień, ale również sugerowanych ofert
                    Administratora.<br />Komunikacja z Użytkownikiem dotyczy także obsługi Użytkownika. Dane osobowe wykorzystywane
                    są w celu pomocy Użytkownikowi, rozwiązaniu problemów oraz odpowiedzi na jego reklamacje.<br />Administrator
                    wykorzystuje również dane osobowe Użytkownika w celu umożliwienia mu komentowania działalności, Sklepu
                    internetowego, usług i towarów Administratora.</li>
                <li><strong>Reklama (zgoda, prawnie uzasadniony cel realizowany przez Administratora)</strong><br />Administrator
                    wykorzystuje dane osobowe Użytkownika w celu oferowania mu dopasowanych do niego reklam, jeśli Użytkownik
                    wyraził zgodę na takie działania lub w przypadku wykształcenia się relacji gospodarczej między Administratorem a
                    Użytkownikiem. Reklamy te dotyczą zarówno ofert Administratora jak i podmiotów z nim
                    współpracujących.<br />Przedstawiane Użytkownikowi reklamy zostają dostosowane indywidualnie do każdego
                    Użytkownika (tzw. „profilowanie”) poprzez korzystanie z:
                    <ul style="list-style-type: disc; margin-left: 30px;">
                        <li>danych podanych bezpośrednio przez Użytkownika,</li>
                        <li>danych zgromadzonych przy korzystaniu przez Użytkownika ze Sklepu internetowego,</li>
                        <li>informacji dostarczonych przez strony trzecie,</li>
                        <li>danych pochodzących z technologii reklamowych, takich ja  pliki cookies,</li>
                        <li>sygnałów nawigacyjnych, pikseli, tagów reklam oraz identyfikatorów mobilnych.</li>
                    </ul>
                    Administrator nie udostępnia danych osobowych Użytkownika reklamodawcom będącymi stronami trzecimi, ani sieciom
                    reklamowych bez wyrażenia na to zgody przez Użytkownika. Jednakże, w przypadku, gdy Użytkownik kliknie w
                    wyświetloną mu reklamę, reklamodawca zostanie o tym poinformowany.
                </li>
                <li><strong>Ulepszanie Sklepu internetowego (prawnie uzasadniony interes Administratora)</strong><br />Administrator
                    wykorzystuje dane osobowe Użytkownika w zakresie prowadzenia działań analitycznych i statystycznych w celu
                    stałego ulepszania Sklepu internetowego, oferowanych przez Administratora towarów i usług, zapewnienia lepszych
                    rozwiązań, dodawania nowych funkcji oraz możliwości.<br />Dane osobowe dotyczące Użytkowników wykorzystywane są
                    również przez Administratora w zakresie badania rynku, badania opinii publicznej oraz dokonywania analizy
                    gospodarczej w celu stałego poprawiania Sklepu internetowego.</li>
                <li><strong>Bezpieczeństwo (prawnie uzasadniony interes Administratora)</strong><br />Administrator wykorzystuje
                    dane osobowe Użytkownika w celu monitorowania, zapobiegania, wykrywania i zwalczania oszustw i nadużyć, ochrony
                    innych Użytkowników przed takimi nadużyciami oraz w celu zapewnienia bezpieczeństwa sieci i informacji. W
                    przypadku, gdy istnieje uzasadnione podejrzenie popełnienia przestępstwa, dane osobowe Użytkownika zostaną
                    wykorzystane w celu zbadania prawdopodobnego dopuszczenia się przez osoby niepożądane przestępstwa lub innego
                    naruszenia niniejszej Polityki Prywatności.</li>
                <li><strong>Dochodzenie roszczeń (prawnie uzasadniony interes Administratora)</strong><br />W przypadku, gdy
                    Użytkownik zdecyduje się skorzystać ze Sklepu internetowego, w szczególności poprzez założenie konta klienta,
                    złożenie za jego pośrednictwem zamówienia na towary lub usługi, Administrator może przetwarzać dane osobowe
                    Użytkownika w zakresie niezbędnym do dochodzenia ewentualnych roszczeń z tytułu prowadzonej działalności
                    gospodarczej, a także analizowania potencjalnych naruszeń zasad korzystania ze Sklepu internetowego.</li>
                <li><strong>Dokumentacja podatkowa (realizacja obowiązku ustawowego)</strong><br />W przypadku, gdy Użytkownik złoży
                    za pośrednictwem Sklepu internetowego zamówienie na towary lub usługi, Administrator będzie przetwarzać dane
                    osobowe Użytkownika w zakresie niezbędnym do prowadzenia dokumentacji podatkowej oraz rozliczeń z tytułu
                    realizowanych zamówień.</li>
            </ol>
            <p><strong>IV. UDOSTĘPNIANIE DANYCH OSOBOWYCH PRZEZ ADMINISTRATORA</strong></p>
            <p>Dane osobowe Użytkownika są lub mogą być przekazywane następującym kategoriom odbiorców:</p>
            <ol style="list-style-type: decimal;">
                <li>podmiotom realizującym niektóre usługi w procesie sprzedażowym, tj. dostawcom usług kurierskich / pocztowych,
                    instytucjom płatniczym pośredniczącym w dokonywaniu płatności przez Użytkowników za złożone zamówienia na towary
                    lub usługi;</li>
                <li>dostawcom usług reklamowych lub marketingowych, w przypadku realizacji celu w postaci marketingu bezpośredniego
                    usług własnych Administratora;</li>
                <li>dostawcom usług prawnych i doradczych oraz wspierających Administratora w dochodzeniu należnych roszczeń (w
                    szczególności kancelariom prawnym, firmom windykacyjnym);</li>
                <li>podmiotom przetwarzającym dane osobowe na zlecenie Administratora, np. dostawcom usług technicznych obsługującym
                    infrastrukturę techniczną potrzebną do prowadzenia Sklepu internetowego;</li>
                <li>podmiotom uprawnionym do uzyskania danych na podstawie obowiązującego prawa np. sądom lub organom ścigania, gdy
                    wystąpią z żądaniem w oparciu o stosowną podstawę prawną.</li>
            </ol>
            <p><strong>V. PRAWA UŻYTKOWNIKA</strong></p>
            <p>Użytkownik ma prawo decydować o swoich danych osobowych poprzez dokonanie wyboru dotyczącego ujawnienia
                poszczególnych danych osobowych, w tym wyboru ustawień prywatności. Jednakże w takiej sytuacji Użytkownik musi być
                świadomy tego, że nie będzie mógł w pełni skorzystać z niektórych funkcjonalności Sklepu internetowego lub usług
                oferowanych przez Administratora.</p>
            <p>W przypadku chęci skorzystania przez Użytkownika z przysługujących mu praw jako podmiotu danych osobowych, może on
                się skontaktować z Administratorem za pośrednictwem wiadomości e-mail wysłanej na adres <a
                    href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a> Część praw jako podmiotu danych osobowych Użytkownik może
                zrealizować poprzez konto klienta w Sklepie internetowym.</p>
            <ol style="list-style-type: decimal;">
                <li><strong>Prawo dostępu do danych</strong><br />Użytkownik jest uprawniony do uzyskania od Administratora
                    potwierdzenia, czy są przetwarzane jego dane osobowe, a jeżeli ma to miejsce - jest uprawniony do uzyskania
                    dostępu do informacji dotyczących szczegółów przetwarzania jego danych, w tym w szczególności informacji o tym,
                    jaki jest cel przetwarzania i kategorie przetwarzanych danych.<br />Użytkownik ma również prawo żądać
                    dostarczenia kopii danych osobowych podlegających przetwarzaniu.</li>
                <li><strong>Prawo do sprostowania danych</strong><br />Użytkownik ma prawo do sprostowania tych danych osobowych,
                    które są nieprawdziwe. Ma on prawo żądać zastąpienia, uzupełnienia czy usunięcia błędów, usterek i mylnych
                    informacji w całym zbiorze danych, który go dotyczy.<br />Przedmiotem uzupełnienia nie mogą być dane osobowe,
                    które są nieprawidłowe, tj. Użytkownik nie może żądać zastąpienia, czy też uzupełnienia dotychczasowych danych
                    danymi nieprawidłowymi.<br />W sytuacji, gdy przetwarzane dane osobowe są niekompletne, Użytkownik może
                    przedstawić dodatkowe oświadczenie celem ich uzupełnienia. Dopuszczalne jest przedstawienie takiego oświadczenia
                    w dowolnej formie, także z wykorzystaniem drogi elektronicznej.</li>
                <li><strong>Prawo do usunięcia danych (prawo do bycia zapomnianym)</strong><br />Użytkownik ma prawo żądania
                    usunięcia jego danych osobowych, jeżeli zachodzi jedna z następujących okoliczności:<ol style="list-style-type: disc;">
                        <li>dane osobowe Użytkownika nie są już niezbędne do celów, w których zostały zebrane lub w inny sposób
                            przetwarzane;</li>
                        <li>Użytkownik cofnął zgodę, na której opiera się przetwarzanie i nie ma innej podstawy prawnej
                            przetwarzania;</li>
                        <li>Użytkownik wnosi sprzeciw wobec przetwarzania dotyczących go danych osobowych;</li>
                        <li>dane osobowe były przetwarzane niezgodnie z prawem;</li>
                        <li>dane osobowe muszą zostać usunięte w celu wywiązania się z obowiązku prawnego przewidzianego w prawie
                            Unii lub prawie państwa członkowskiego, któremu podlega Administrator;</li>
                        <li>dane osobowe zostały zebrane w związku z oferowaniem usług społeczeństwa informacyjnego.</li>
                    </ol>Prawo do bycia zapomnianym, przysługuje Użytkownikowi wyłącznie w przypadku skorzystania z prawa do
                    usunięcia danych osobowych i wyłącznie w sytuacji, w której dotyczące go dane osobowe zostały upublicznione
                    przez Administratora.</li>
                <li><strong>Prawo do ograniczenia przetwarzania</strong><br />Użytkownik ma prawo do ograniczenia przetwarzania jego
                    danych osobowych w następujących przypadkach:<ol style="list-style-type: disc;">
                        <li>Użytkownik kwestionuje prawidłowość danych osobowych - na okres pozwalający Administratorowi sprawdzić
                            prawidłowość tych danych;</li>
                        <li>przetwarzanie jest niezgodne z prawem, a Użytkownik sprzeciwia się usunięciu danych osobowych, żądając w
                            zamian ograniczenia ich wykorzystywania;</li>
                        <li>Administrator nie potrzebuje już danych osobowych Użytkownika do celów przetwarzania, ale są one
                            potrzebne Użytkownikowi do ustalenia, dochodzenia lub obrony roszczeń;</li>
                        <li>Użytkownik wniósł sprzeciw wobec przetwarzania - do czasu stwierdzenia, czy prawnie uzasadnione podstawy
                            po stronie Administratora są nadrzędne wobec podstaw sprzeciwu Użytkownika.</li>
                    </ol>W przypadku ograniczenia przetwarzania, Administrator może przetwarzać dane osobowe, z wyjątkiem
                    przechowywania, wyłącznie:<ol style="list-style-type: disc">
                        <li>za zgodą Użytkownika lub</li>
                        <li>w celu ustalenia, dochodzenia lub obrony roszczeń, lub</li>
                        <li>w celu ochrony praw innej osoby fizycznej lub prawnej, lub</li>
                        <li>z uwagi na ważne względy interesu publicznego Unii lub państwa członkowskiego.</li>
                    </ol>
                </li>
                <li><strong>Prawo do przenoszenia danych</strong><br />Użytkownik ma prawo otrzymać w ustrukturyzowanym, powszechnie
                    używanym formacie dane osobowe go dotyczące, które dostarczył Administratorowi oraz ma prawo przesłać te dane
                    innemu administratorowi.<br />Użytkownik ma również prawo żądania, by jego dane osobowe zostały przesłane przez
                    Administratora bezpośrednio innemu administratorowi, o ile jest to technicznie możliwe.</li>
                <li><strong>Prawo do sprzeciwu</strong><br />Użytkownikowi przysługuje prawo do wniesienia w dowolnym momencie
                    sprzeciwu, z przyczyn związanych z jego szczególną sytuacją, wobec przetwarzania jego danych osobowych:<ol style="list-style-type: disc">
                        <li>w interesie publicznym, w ramach sprawowania władzy publicznej powierzonej Administratorowi,</li>
                        <li>wobec przetwarzania do celów marketingu bezpośredniego w tym profilowania o ile jest związane z tym
                            marketingiem bezpośrednim,</li>
                        <li>w uzasadnionym celu Administratora.</li>
                    </ol>Postępowanie w zakresie rozpatrzenia sprzeciwu i wszelka komunikacja są wolne od opłat, istnieje również
                    możliwość wniesienia sprzeciwu drogą elektroniczną.</li>
                <li><strong>Prawo wniesienia skargi</strong><br />Użytkownik ma prawo wnieść skargę do Urzędu Ochrony Danych
                    Osobowych, w szczególności w państwie członkowskim swojego zwykłego pobytu, swojego miejsca pracy lub miejsca
                    popełnienia domniemanego naruszenia.</li>
            </ol>
            <p><strong>VI. PLIKI COOKIE I INNE TECHNOLOGIE WYKORZYSTYWANE PRZEZ ADMINISTRATORA</strong></p>
            <p>Administrator korzysta z plików cookies i innych podobnych technologii, żeby zapewnić optymalną obsługę wizyty
                Użytkownika w Sklepie internetowym, umożliwić szybszy i łatwiejszy dostęp do informacji i zaproponować Użytkownikom
                coraz doskonalsze funkcjonalności Sklepu internetowego, a także w celach marketingowych oraz remarketingowych
                (obejmujących niezbędne działania analityczne i zestawianie w profile marketingowe na podstawie aktywności
                Użytkownika na poszczególnych podstronach Sklepu internetowego). Pliki cookies („ciasteczka”) to fragmenty kodu,
                które są plikami tekstowymi odpowiadającymi zapytaniom HTTP kierowanym do serwera Administratora. W Sklepie
                internetowym wykorzystywane są również inne dostępne technologie, pozwalające na zapisywanie informacji w
                przeglądarce w odpowiednich magazynach danych (Session Storage, Local Storage), a także umieszczane są w fragmenty
                kodów narzędzi analitycznych dostarczanych przez innych dostawców, które umożliwiają zapisanie plików cookies w
                domenach tych usług. Przechowywana informacja lub uzyskiwanie do niej dostępu nie powoduje zmian konfiguracyjnych w
                urządzeniu Użytkownika i oprogramowaniu na nim zainstalowanym. Informacje zawarte w plikach cookies i podobnych
                technologiach uznawane są za dane osobowe jedynie w powiązaniu z innymi danymi osobowymi dostępnymi na temat danego
                Użytkownika. Jeśli Użytkownik nie zgadza się na zapisywanie i odbieranie informacji w plikach cookies lub podobnych
                technologiach, może zmienić zasady dotyczące plików cookies za pomocą ustawień swojej przeglądarki internetowej lub
                zastosowanie tzw. opcji opt-out na stronie dostawcy danego rozwiązania technologicznego. Szczegółowe informacje
                odnoście stosowanych przez Administratora technologii dostępne są w <a href="/polityka-cookies">Polityce
                    cookies</a>.</p>
            <p><strong>VII. INNE WAŻNE INFORMACJE</strong></p>
            <ol style="list-style-type: decimal;">
                <li><strong>Ochrona bezpieczeństwa danych osobowych</strong><br />Administrator wprowadza różne środki mające na
                    celu zapewnienie bezpieczeństwa danych osobowych Użytkownika. Bezpieczne korzystanie z oferowanych usług
                    zapewniają stosowane systemy oraz procedury chroniące przed dostępem oraz ujawnieniem danych osobom
                    niepożądanym. Ponadto stosowane przez Administratora systemy oraz procedury są regularnie monitorowane w celu
                    wykrycia ewentualnych zagrożeń. Pozyskane przez Administratora dane osobowe przechowywane są w systemach
                    komputerowych, do których dostęp jest ściśle ograniczony.</li>
                <li><strong>Przechowywanie danych osobowych</strong><br />Okres przechowywania danych osobowych Użytkowników może
                    się różnić ze względu na to, że w stosunku do danych osobowych różnych Użytkowników mogą zostać określone inne
                    cele przetwarzania tych danych.<br />Administrator przechowuje dane osobowe przez taki okres, jaki jest
                    konieczny do osiągnięcia określonych celów, tj.:<ol style="list-style-type: disc;">
                        <li>w przypadku celów analitycznych i statystycznych - przez okres niezbędny dla osiągnięcia celów
                            związanych ze skutecznym funkcjonowaniem i rozwojem Sklepu internetowego;</li>
                        <li>w przypadku realizowania zamówień, świadczenia usług na rzecz Użytkownika - przez okres obowiązywania
                            umowy oraz okres przedawnienia roszczeń;</li>
                        <li>przez okres wymagany przepisami prawa w odniesieniu do celu prowadzenia dokumentacji podatkowej oraz
                            rozliczeń z tytułu realizowanych umów;</li>
                        <li>w przypadku przetwarzania danych osobowych w celach marketingowych - przez okres istnienia relacji
                            gospodarczej z Użytkownikiem, chyba że wcześniej Użytkownik złoży sprzeciw wobec przetwarzania w tych
                            celach;</li>
                    </ol>W każdym z powyższych przypadków po upływie niezbędnego okresu przetwarzania dane mogą być przetwarzane
                    tylko na zabezpieczenia dochodzenia roszczeń lub obrony przed nimi, a po tym czasie jedynie w przypadku i w
                    zakresie, w jakim będą wymagać tego przepisy prawa..<br />Dane osobowe Użytkowników są przechowywane w bazie
                    danych Administratora, w której zastosowano środki techniczne i organizacyjne zapewniające ochronę
                    przetwarzanych danych zgodne z wymaganiami określonymi w obowiązujących przepisach prawa. Dostęp do bazy danych
                    ma jedynie Administrator.</li>
                <li><strong>Zmiany polityki prywatności</strong><br />W celu uaktualnienia informacji zawartych w niniejszej
                    Polityce Prywatności oraz jej zgodności z obowiązującymi przepisami prawa, niniejsza Polityka Prywatności może
                    ulec zmianie. Wraz ze zmianą treści dokumentu, zmieniona zostanie data jego aktualizacji, zamieszczana na
                    wstępie niniejszej Polityki Prywatności. Natomiast o każdej istotnej zmianie Użytkownik zostanie powiadomiony
                    poprzez informację umieszoną na stronie internetowej Sklepu internetowego lub bezpośrednio. W celu zasięgnięcia
                    informacji o sposobie ochrony danych osobowych, Administrator rekomenduje Użytkownikom regularne zapoznawanie
                    się z niniejszymi zasadami Polityki Prywatności.</li>
                <li><strong>Informacje kontaktowe</strong><br />W razie jakichkolwiek wątpliwości związanych z kwestiami ochrony
                    danych osobowych lub w celu uzyskania informacji dotyczących niniejszej Polityki Prywatności Użytkownik może
                    skontaktować się z Administratorem za pośrednictwem wiadomości e-mail <a
                        href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a> oraz drogą pocztową na
                    następujący adres : <strong><?php echo $result['companyadress'] ?>, <?php echo $result['companypostcode'] ?> <?php echo $result['companycity'] ?>.</strong></li>
            </ol></textarea>
                </div>
                <div class="statute">
                    <div class="generated-title">
                        <p class="generated-title__text">Regulamin sklepu</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.statute textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.statute','Regulamin sklepu');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea readonly class="generated__textarea"><p><strong>§1 POSTANOWIENIA OGÓLNE</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Niniejszy Regulamin Sklepu Internetowego (zwany dalej „Regulaminem”) określa zasady korzystania ze Sklepu
                        Internetowego, w tym między innymi składania i realizacji Zamówień, korzystania z Konta Klienta, tryb
                        postępowania reklamacyjnego, uprawnienia związane z odstąpieniem od Umowy sprzedaży.</li>
                    <li>Regulamin jest udostępniany Klientowi pod adresem <a href="/regulamin-sklepu">Regulamin sklepu</a> nieodpłatnie, przed zawarciem Umowy
                        sprzedaży, w sposób umożliwiający pozyskanie, odtworzenie i utrwalanie treści Regulaminu za pomocą Systemu
                        Teleinformatycznego, którym posługuje się Klient.</li>
                    <li>Klient zobowiązany jest do przestrzegania wszystkich postanowień Regulaminu. Sprzedaż odbywa się na podstawie
                        aktualnej wersji niniejszego Regulaminu, tj. wersji, która jest obowiązująca i zaakceptowana przez Klienta w
                        momencie złożenia Zamówienia.</li>
                    <li>Zawarcie umowy o świadczenie drogą elektroniczną usług Konta Klienta wskazanych w niniejszym Regulaminie
                        następuje pod warunkiem rejestracji w Sklepie Internetowym, zapoznania się i akceptacji treści niniejszego
                        Regulaminu.</li>
                    <li>Przez zawarcie umowy o świadczenie drogą elektroniczną usług Konta Klienta Sprzedawca zobowiązuje się do stałego
                        świadczenia na rzecz Klienta usług dostępu do Konta Klienta oraz korzystania ze Sklepu Internetowego w pełnym
                        zakresie na podstawie, w ramach i na zasadach wskazanych w niniejszym Regulaminie. </li>
                </ol>
                <p><strong>§2 DEFINICJE</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Ilekroć w Regulaminie jest mowa o:<ol style="list-style-type: lower-alpha;">
                            <li><span style="text-decoration: underline;"><strong>„Sprzedawcy”</strong></span> – należy przez to
                                rozumieć <strong><?php echo $result['companyname'] ?>, adres <?php echo $result['companyadress'] ?>, <?php echo $result['companypostcode'] ?>
                                <?php echo $result['companycity'] ?>, numer NIP: <?php echo $result['nip'] ?>, numer REGON: <?php echo $result['regon'] ?>, e-mail <a
                                    href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a> </strong> - który prowadzi Sklep Internetowy i za jego
                                pośrednictwem dokonuje sprzedaży Towarów;</li>
                            <li><span style="text-decoration: underline;"><strong>„Kliencie”</strong></span> – należy przez to rozumieć
                                osobę fizyczną posiadająca pełną zdolność do czynności prawnych, a w wypadkach przewidzianych przez
                                powszechnie obowiązujące przepisy prawa osobę fizyczną posiadającą ograniczoną zdolność do czynności
                                prawnych, a także osobę prawną lub jednostkę organizacyjną nieposiadającą osobowości prawnej, której
                                ustawa przyznaje zdolność prawną - korzystającą ze Sklepu Internetowego, w tym przy pomocy utworzonego
                                dla niej przez Sprzedawcę Konta Klienta; </li>
                            <li><span style="text-decoration: underline;"><strong>„Konsumencie”</strong></span> - należy przez to
                                rozumieć Klienta będącego osobą fizyczną, korzystającego ze Sklepu Internetowego, w szczególności
                                dokonującego zakupów, w zakresie niezwiązanym bezpośrednio z działalnością gospodarczą lub zawodową
                                Klienta;</li>
                            <li><span style="text-decoration: underline;"><strong>„Stronach”</strong></span> – należy przez to rozumieć
                                łącznie Sprzedawcę i Klienta;</li>
                            <li><span style="text-decoration: underline;"><strong>„Umowie sprzedaży”</strong></span> – należy przez to
                                rozumieć umowę zawartą na odległość, której przedmiotem jest sprzedaż przez Sprzedawcę Towaru na rzecz
                                Klienta zgodnie z zasadami określonymi w Regulaminie.</li>
                            <li><span style="text-decoration: underline;"><strong>„Sklepie Internetowym”</strong></span> – należy przez
                                to rozumieć platformę internetową <?php echo explode('//', $result['compnayurl'])[1] ?> administrowaną przez Sprzedawcę, dostępną on-line
                                poprzez witrynę <?php echo explode('//', $result['compnayurl'])[1] ?>, za pośrednictwem której Klient może dokonać zakupu Towarów;</li>
                            <li><strong><span style="text-decoration: underline;">„Systemie Teleinformatycznym”</span></strong> - należy
                                przez to rozumieć zespół współpracujących ze sobą urządzeń informatycznych i oprogramowania,
                                zapewniający przetwarzanie i przechowywanie, a także wysyłanie i odbieranie danych poprzez sieci
                                telekomunikacyjne za pomocą właściwego dla danego rodzaju sieci telekomunikacyjnego urządzenia końcowego
                                w rozumieniu ustawy z dnia 16 lipca 2004 r. – Prawo telekomunikacyjne (t.j. Dz.U. z 2019 r. poz. 2460 ze
                                zm.); </li>
                            <li><span style="text-decoration: underline;"><strong>„Towarze”</strong></span> - należy przez to rozumieć
                                rzecz ruchomą prezentowaną przez Sprzedawcę w Sklepie Internetowym, która może być przedmiotem Umowy
                                sprzedaży. Zdjęcia  Towarów mają charakter poglądowy; oznacza to, że Towary na zdjęciach mogą
                                nieznacznie różnić się ich rzeczywistego wyglądu ze względu na indywidualne ustawienia sprzętu
                                komputerowego Klienta (np. nasycenie kolorów, proporcje) </li>
                            <li><strong><span style="text-decoration: underline;">„Koncie Klienta”</span></strong> – należy przez to
                                rozumieć indywidualne konto założone dla Klienta w ramach świadczenia usług drogą elektroniczną przez
                                Sprzedawcę, przy pomocy którego Klient korzysta z dostępu do Sklepu Internetowego oraz ma możliwość
                                między innymi składania Zamówień w sposób uproszczony;</li>
                            <li><strong><span style="text-decoration: underline;">„Adresie Elektronicznym”</span></strong> – należy
                                przez to rozumieć oznaczenie Systemu Teleinformatycznego umożliwiające porozumiewanie się za pomocą
                                środków komunikacji elektronicznej, w szczególności poczty elektronicznej;</li>
                            <li><strong><span style="text-decoration: underline;">„Cenie”</span></strong> – należy przez to rozumieć
                                wartość brutto Towaru wyrażoną w walucie PLN, uwzględniającą podatek od towarów i usług. Cena nie
                                uwzględnia kosztu dostawy, który zależny jest od sposobu dostarczenia Towaru do Klienta, a także od
                                wartości oraz wielkości Zamówienia i podawany jest przy wyborze sposobu dostawy Towaru przez Klienta.
                                Całkowity koszt Zamówienia (tj. cena Towaru wraz z innymi kosztami, w tym kosztami dostawy) wskazany
                                jest w koszyku przed złożeniem Zamówienia przez Klienta;</li>
                            <li><strong><span style="text-decoration: underline;">„Danych Osobowych”</span></strong> - należy przez to
                                rozumieć informacje o zidentyfikowanej lub możliwej do zidentyfikowania osobie fizycznej;</li>
                            <li><strong><span style="text-decoration: underline;">„Administratorze Danych Osobowych”</span></strong> -
                                należy przez to rozumieć Sprzedawcę, który występując w tej roli samodzielnie lub wspólnie z innymi
                                ustala cele i sposoby przetwarzania Danych Osobowych;</li>
                            <li><span style="text-decoration: underline;"><strong>„Regulaminie”</strong></span> - należy przez to
                                rozumieć niniejszy dokument; </li>
                            <li><span style="text-decoration: underline;"><strong>„RODO”</strong></span> – należy przez to rozumieć
                                ROZPORZĄDZENIE PARLAMENTU EUROPEJSKIEGO I RADY (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie
                                ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu
                                takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych)
                                (Dz.U.UE.L.2016.119.1 z dnia 2016.05.04);</li>
                            <li><span style="text-decoration: underline;"><strong>„Zamówieniu”</strong></span> należy przez to rozumieć
                                oświadczenie woli Klienta złożone za pośrednictwem Sklepu Internetowego określające: rodzaj i ilość
                                zamawianych Towarów; rodzaj dostawy; rodzaj i wysokość płatności; miejsce wydania rzeczy, dane Klienta,
                                stanowiące ofertę zawarcia Umowy sprzedaży między Klientem a Sprzedawcą.</li>
                        </ol>
                    </li>
                </ol>
                <p><strong>§3 OGÓLNA CHARAKTERYSTYKA SKLEPU INTERNETOWEGO</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Sklep Internetowy prowadzony jest przez Sprzedawcę.</li>
                    <li>Sklep Internetowy nie służy do sprzedaży hurtowej. W przypadku chęci zakupu Towarów w ilości hurtowej Klient
                        powinien skontaktować się ze Sprzedawcą drogą email wysyłając zapytanie na Adres Elektroniczny Sprzedawcy: <a
                            href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a>. Jeśli z treści składanego Zamówienia poprzez Sklep
                        internetowy będzie wynikać, iż zamówienie ma charakter Zamówienia hurtowego, Sprzedawca ma prawo odmowy
                        realizacji takiego Zamówienia informując o tym Klienta poprzez stosowny komunikat w Sklepie internetowym lub
                        kontaktując się z Klientem w tym przedmiocie.</li>
                    <li>Informacje o Towarach zamieszczone na stronach Sklepu Internetowego nie stanowią oferty w rozumieniu przepisów
                        kodeksu cywilnego, lecz zaproszenie do składania ofert w rozumieniu art. 71 kodeksu cywilnego.</li>
                    <li>Informacje o Towarach zamieszczone w Sklepie Internetowym nie są równoznaczne z tym, że Towary są faktycznie
                        dostępne u Sprzedawcy i jest możliwa realizacja Zamówienia na nie.</li>
                    <li>Towary prezentowane w Sklepie Internetowym mogą posiadać gwarancję producenta, importera lub Sprzedawcy, która
                        zasięgiem obejmuje terytorium Polski. Czas udzielenia gwarancji każdego Towaru wskazana jest w jego opisie.
                        Szczegółowe warunki realizacji gwarancji są określone w karcie gwarancyjnej wystawionej przez gwaranta. </li>
                    <li>Sprzedawca zastrzega sobie prawo do zmiany Cen Towarów prezentowanych w Sklepie Internetowym, wprowadzenia
                        nowych Towarów do oferty, usuwania Towarów z oferty lub zmianę ich opisu, prowadzenia akcji promocyjnych w
                        Sklepie Internetowym, w szczególności na podstawie regulaminu danej promocji. Wprowadzone zmiany nie wpływają na
                        skuteczność i wykonywanie złożonych wcześniej Zamówień przez Klienta.</li>
                    <li>Sprzedawca zapewnia dostępność Sklepu Internetowego dla Klienta wyłącznie on-line i pod warunkiem  zapewnienia
                        przez Klienta na jego własny koszt:<ol style="list-style-type: lower-alpha;">
                            <li>sprzętu komputerowego z systemem operacyjnym pozwalającym na korzystanie z zasobów sieci Internet, </li>
                            <li>połączenia z siecią Internet;</li>
                            <li>dostępu do indywidualnego konta poczty elektronicznej e-mail; </li>
                            <li>prawidłowo skonfigurowanej przeglądarki internetowej w najnowszej oficjalnej wersji z włączoną opcją
                                obsługi plików typu „cookies” (np. Mozilla Firefox, Google Chrome, Safari, Opera)</li>
                        </ol>
                    </li>
                    <li>Z zastrzeżeniem odmiennych postanowień Regulaminu, Sklep Internetowy jest dostępny dla Klienta w okresie
                        korzystania przez niego ze Sklepu Internetowego, przez całą dobę i siedem dni w tygodniu. </li>
                    <li>Sprzedawca zastrzega możliwość zaistnienia niedostępności on-line Sklepu Internetowego dla Klienta celem
                        zapewnienia bezpieczeństwa i stabilności Sklepu Internetowego na potrzeby napraw, konserwacji, usuwania awarii,
                        wprowadzania niezbędnych adaptacji, zmian i innych tym podobnych czynności.</li>
                    <li>Sprzedawca zastrzega sobie prawo do zmiany funkcjonalności Sklepu Internetowego, zarówno poprzez rozbudowywanie
                        go o nowe funkcje jak i zmiany istniejącej funkcjonalności.</li>
                </ol>
                <p><strong>§4 KONTO KLIENTA</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Warunkiem korzystania przez Klienta z pełnego zakresu funkcjonalności Sklepu Internetowego jest akceptacja
                        postanowień Regulaminu, nieodpłatna rejestracja Konta Klienta w Sklepie Internetowym i potwierdzenie tej
                        rejestracji przez Sprzedawcę. </li>
                    <li>Założenie Konta Klienta nie jest konieczne do złożenia Zamówienia w Sklepie Internetowym.</li>
                    <li>Poprzez zarejestrowanie Konta Klienta oraz akceptację postanowień Regulaminu, Klient składa oświadczenie woli
                        wyrażające zgodę na świadczenie drogą elektroniczną usług prowadzenia Konta Klienta zgodnie z postanowieniami
                        Regulaminu.</li>
                    <li>Podczas rejestracji Konta Klienta wprowadza on ustalone przez siebie i znane tylko sobie login i hasło. Klient
                        ma obowiązek dbać, aby jego login i hasło pozostały poufne, a w szczególności nie może ich udostępniać osobom
                        nieuprawnionym. </li>
                    <li>Klient powinien w celu rejestracji Konta Klienta:<ol style="list-style-type: lower-alpha;">
                            <li>wypełnić formularz rejestracyjny znajdujący się w Sklepie Internetowym;</li>
                            <li>wypełnić wszystkie pola formularza oznaczone gwiazdką jako obowiązkowe;</li>
                            <li>zaakceptować Regulamin.</li>
                        </ol>
                    </li>
                    <li>Dane wpisane do formularza rejestracyjnego podczas rejestracji Konta Klienta powinny dotyczyć Klienta  oraz
                        powinny być prawdziwe.</li>
                    <li>Podczas rejestracji Konta Klienta na wskazany we wniosku rejestracyjnym Adres Elektroniczny wysłane zostanie
                        potwierdzenie rejestracji Konta Klienta w Sklepie Internetowym, z prośbą o zweryfikowanie danych i zakończenie
                        rejestracji Konta Klienta. Z tą chwilą zawarta zostaje umowa o świadczenie drogą elektroniczną usługi
                        prowadzenia Konta Klienta, zaś Klient uzyskuje możliwość dostępu do Konta Klienta i dokonywania zmian podanych
                        podczas rejestracji danych.</li>
                    <li>Sprzedawca może odmówić przyjęcie rejestracji Konta Klienta  i zawarcia umowy o świadczenie usług drogą
                        elektroniczną z ważnych przyczyn.</li>
                </ol>
                <p><strong>§5 ZAMÓWIENIA I ICH REALIZACJA</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Zamówienia można składać za pośrednictwem elektronicznego formularza Zamówienia dostępnego w Sklepie
                        Internetowym, przez całą dobę, 7 dni w tygodniu. </li>
                    <li>Klient może złożyć Zamówienie po zalogowaniu się do Konta Klienta bądź bez Konta poprzez podanie danych
                        wskazanych w elektronicznym formularzu Zamówienia niezbędnych do realizacji Zamówienia.</li>
                    <li>Celem złożenia Zamówienia  za pośrednictwem Sklepu Internetowego Klient dodaje wybrane przez siebie Towary do
                        koszyka dokonując wyboru rodzaju i liczby Towarów oraz naciskając przycisk „DODAJ DO KOSZYKA” oraz podejmuje
                        inne czynności techniczne w oparciu o wyświetlane Klientowi komunikaty, w tym wskazuje sposób dostawy i formę
                        płatności. Następnie Klient składa Zamówienie przez wysłanie elektronicznego formularza Zamówienia do
                        Sprzedawcy, wybierając na stronie internetowej Sklepu Internetowego przycisk „Zamówienie z obowiązkiem zapłaty”
                        (lub jemu równoważny). W celu złożenia Zamówienia konieczna jest uprzednia akceptacja postanowień Regulaminu
                        przez Klienta. W podsumowaniu Zamówienia, przed jego wysyłką do Sprzedawcy, Klient otrzymuje informację o
                        głównych cechach zamawianych Towarów, łącznym koszcie Zamówienia, czyli Cenie za wybrany Towar, koszcie dostawy,
                        jak też o wszystkich dodatkowych kosztach, jakie go obciążają w związku z Zamówieniem.</li>
                    <li>Wysłanie Zamówienia przez Klienta stanowi złożenie Sprzedawcy oferty zawarcia Umowy sprzedaży Towarów będących
                        przedmiotem Zamówienia.</li>
                    <li>Po złożeniu Zamówienia, Sprzedawca przesyła na podany przez Klienta Adres Elektroniczny informację o przyjęciu
                        Zamówienia do realizacji. Informacja ta stanowi oświadczenie Sprzedawcy o przyjęciu oferty, co jest równoznaczne
                        z zawarciem przez Strony Umowy sprzedaży.</li>
                    <li>Wiążąca i ostateczna jest Cena podana w koszyku, w chwili składania Zamówienia przez Klienta.</li>
                    <li>Za Zamówienie złożone w Sklepie Internetowym Klient może zapłacić: <ol>
                            <li>gotówką przy odbiorze  - w przypadku dostawy Towarów przy pomocy kuriera lub odbiorze Towarów osobiście
                                przez Klienta, albo </li>
                            <li>z góry – przelewem tradycyjnym na rachunek płatniczy Sprzedawcy nr Numer konta bankowego: <strong><?php echo $result['companyaccountnumber'] ?></strong> albo przy pomocy płatności elektronicznych i płatności kartą płatniczą za
                                pośrednictwem operatorów płatności elektronicznych.</li>
                        </ol>
                    </li>
                    <li>Klient dokonując płatności zostanie poinformowany o jej wysokości bezpośrednio przed jej dokonaniem, a także o
                        dostępnych metodach płatności oraz o danych operatora realizującego płatności. Szczegółowy regulamin dokonywania
                        płatności za pośrednictwem operatorów realizujących płatności elektroniczne dostępny jest na stronie
                        internetowej danego operatora.</li>
                    <li>W celu dokonania płatności za pośrednictwem operatora płatności elektronicznej Klient powinien postępować
                        zgodnie z instrukcjami podawanymi przez operatora płatności elektronicznych, do którego zostanie przekierowany
                        ze Sklepu Internetowego, oraz niezwłocznie dokonać zapłaty za złożone Zamówienie.</li>
                    <li>Klient oświadcza, że wyraża zgodę na stosowanie i przekazywanie przez Usługodawcę faktur elektronicznych
                        niewymagających podpisów stron w formacie pdf poprzez wysyłanie ich na wskazany przez Klienta Adres
                        Elektroniczny. Sprzedawca dostarcza Klientowi fakturę droga elektroniczną niezwłocznie po otrzymaniu płatności
                        za Zamówienie.</li>
                    <li>Sprzedawca realizuje dostawy Towarów wyłącznie na terytorium Rzeczpospolitej Polskiej, chyba że inaczej
                        zastrzeżono w opisie danego Towaru.</li>
                    <li>Składając Zamówienie Klient dokonuje wyboru w zakresie sposobu dostawy Towaru. Towar może zostać Klientowi
                        dostarczony:<ol>
                            <li>za pomocą firmy kurierskiej,</li>
                            <li>za pomocą paczkomatu,</li>
                            <li>poprzez odbiór osobisty Towaru przez Klienta w placówce Sprzedawcy.</li>
                        </ol>
                    </li>
                    <li>Sprzedawca zamieszcza w Sklepie Internetowym informację o liczbie dni roboczych potrzebnych do dostawy Towarów
                        przy użyciu określonej metody dostawy.</li>
                    <li>Odbierając przesyłkę z Towarem Klient powinien sprawdzić jej stan, a w przypadku stwierdzenia zniszczenia lub
                        naruszenia opakowania zaleca się, aby w obecności osoby wydającej Towary Klient sporządził protokół szkody.
                        Klient powinien niezwłocznie przesłać do Sprzedawcy protokół szkody wraz  ewentualną reklamacją.</li>
                    <li>Sprzedawca zastrzega maksymalny czas realizacji Zamówienia wynoszący 30 dni. Po bezskutecznym upływie tego
                        terminu Klient może anulować Zamówienie poprzez przesłanie do Sprzedawcy oświadczenia o anulowaniu Zamówienia. W
                        takim przypadku Sprzedawca niezwłocznie zwraca Klientowi będącemu Konsumentem wszystkie dokonane przez niego
                        płatności, w tym ewentualne koszty dostarczenia Towaru.</li>
                    <li>Sprzedawca dołącza do każdego dostarczanego Zamówienia potwierdzenie sprzedaży w postaci faktury VAT lub
                        paragonu fiskalnego. W przypadku, gdy Zamawiający jest płatnikiem podatku VAT i chce otrzymać fakturę, powinien
                        wysłać Sprzedającemu stosowną informację o tym, np. za pośrednictwem poczty elektronicznej bezpośrednio po
                        dokonanym zakupie, podając niezbędne dane.</li>
                </ol>
                <p><strong>§6  ROZWIĄZANIE I WYGAŚNIĘCIE UMOWY O ŚWIADCZENIE USŁUG</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Niniejszy rozdział nie dotyczy Umów Sprzedaży, lecz ma zastosowanie wyłącznie do umów o świadczenie drogą
                        elektroniczną usług prowadzenia Konta Klienta.</li>
                    <li>Umowa o świadczenie usług drogą elektroniczną może zostać rozwiązana przez Klienta w każdym czasie za
                        pośrednictwem Sklepu Internetowego. Sprzedawca dokona potwierdzenia rozwiązania umowy poprzez wysłanie Klientowi
                        wiadomości na Adres Elektroniczny wskazany przez Klienta w Koncie Klienta.</li>
                    <li>Sprzedawca ma prawo wypowiedzieć umowę o świadczenie usług drogą elektroniczną w każdym czasie z ważnych
                        przyczyn za 14-dniowym okresem wypowiedzenia. Sprzedawca wypowiada umowę o świadczenie usług drogą elektroniczną
                        poprzez wysłanie do Klienta stosownego oświadczenia woli na Adres Elektroniczny wskazany przez Klienta w Koncie
                        Klienta.</li>
                    <li>Umowa o świadczenie usług drogą elektroniczną wygasa w razie:<ol style="list-style-type: lower-alpha;">
                            <li>Śmierci albo likwidacji Klienta;</li>
                            <li>Likwidacji Sprzedawcy albo zaprzestania prowadzenia przez Sprzedawcę działalności gospodarczej.</li>
                        </ol>
                    </li>
                </ol>
                <p><strong>§7 OCHRONA DANYCH OSOBOWYCH</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Sprzedawca jako Administrator Danych Osobowych dokłada wszelkich starań, aby zapewnić wszelkie możliwe środki
                        fizycznej, technicznej i organizacyjnej ochrony Danych Osobowych przed ich przypadkowym czy umyślnym
                        zniszczeniem, przypadkową utratą, zmianą, nieuprawnionym ujawnieniem, wykorzystaniem czy dostępem, zgodnie ze
                        wszystkimi obowiązującymi przepisami prawa, w tym RODO.</li>
                    <li>Sprzedawca korzysta w ramach Sklepu Internetowego z plików cookies i innych podobnych technologii, żeby poprawić
                        efektywność i zaproponować Klientowi coraz doskonalsze funkcjonalności Sklepu Internetowego oraz bardziej
                        dopasowane reklamy. Jeśli Klient nie zgadza się na zapisywanie i odbieranie informacji w plikach cookies, może
                        on zmienić zasady dotyczące plików cookies za pomocą ustawień swojej przeglądarki internetowej lub zastosowanie
                        tzw. opt-out na stronie dostawcy danego rozwiązania technologicznego. Szczegółowe informacje odnośnie
                        stosowanych przez Sprzedawcę technologii dostępne są w Polityce cookies dostępnej <?php echo explode('//', $result['compnayurl'])[1] ?></li>
                    <li>Więcej informacji na temat przetwarzania Danych Osobowych przez Sprzedawcę znajduje się w Polityce Prywatności
                        dostępnej <?php echo explode('//', $result['compnayurl'])[1] ?></li>
                </ol>
                <p><strong>§8 ODPOWIEDZIALNOŚĆ</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Klient zobowiązany jest korzystać ze Sklepu Internetowego zgodnie z jego przeznaczeniem i powstrzymać się od
                        wszelkiej działalności, która mogłaby zakłócić jego prawidłowe funkcjonowanie.</li>
                    <li>Klientowi zakazuje się wprowadzania do obszaru Sklepu Internetowego treści o charakterze bezprawnym. Klient
                        ponosi pełną odpowiedzialność za poprawność, zakres, kompletność, treść i zgodność z przepisami prawa danych
                        wprowadzonych i przechowywanych w Koncie Klienta.</li>
                    <li>W zakresie dozwolonym przepisami prawa, Sprzedawca nie ponosi odpowiedzialności za:<ol
                            style="list-style-type: lower-alpha;">
                            <li>blokowanie przez administratorów serwerów pocztowych, które obsługują wiadomości e-mail Klienta,
                                przesyłane wiadomości Sprzedawcy na Adres Elektroniczny Klienta oraz za usuwanie i blokowanie wiadomości
                                e-mail wysłanych przez Sprzedającego przez oprogramowanie zainstalowane na sprzęcie komputerowym
                                używanym przez Klienta;</li>
                            <li>nieprawidłowe działanie Sklepu Internetowego wynikające z okoliczności, że sprzęt komputerowy,
                                oprogramowanie lub dostęp do Internetu Klienta nie spełniają wymagań technicznych wskazanych w
                                Regulaminie;</li>
                            <li>konsekwencje podania przez Klienta błędnych lub niezgodnych z prawdą danych Klienta przy rejestracji
                                Konta Klienta lub składaniu Zamówienia.</li>
                        </ol>
                    </li>
                    <li>Sklep Internetowy może zawierać odnośniki do innych witryn internetowych. Sprzedawca nie odpowiada za treść,
                        formę oraz poprawność informacji zawartych w tych odnośnikach. Przeglądanie zawartości odnośników odbywa się na
                        własne ryzyko Klienta. </li>
                    <li>Sprzedawca zastrzega sobie prawo umieszczania w dowolnej części Sklepu Internetowego treści reklamowych w
                        formach stosowanych w Internecie. Sprzedawca nie ponosi odpowiedzialności za treści reklamowe zamieszczane w
                        Sklepie Internetowym oraz za wynikające z tego tytułu roszczenia osób trzecich.</li>
                    <li>Z zastrzeżeniem bezwzględnie obowiązujących przepisów prawa, w maksymalnym dopuszczalnym przez prawo zakresie
                        odpowiedzialność Sprzedawcy za szkody wyrządzone Klientom niebędącym Konsumentami ogranicza się do kwoty, jaką
                        taki Klient zapłacił Sprzedawcy za nabycie danego Towaru, niezależnie od źródła i podstawy prawnej roszczenia
                        Klienta niebędącego Konsumentem, a także wyłączona jest odpowiedzialność z tytułu utraconych korzyści.</li>
                </ol>
                <p><strong>§ 9 ODSTĄPIENIE OD UMOWY SPRZEDAŻY</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Konsument jest uprawiony do odstąpienia od zawartej Umowy sprzedaży, bez podania przyczyny, w terminie 14 dni
                        licząc od dnia otrzymania Zamówienia. Termin ten rozpoczyna bieg:<ol style="list-style-type: lower-alpha;">
                            <li>od objęcia Towaru w posiadanie przez Konsumenta lub wskazaną przez niego osobę trzecią inną niż
                                przewoźnik, </li>
                            <li>w przypadku gdy Umowa sprzedaży obejmuje wiele Towarów, które są dostarczane osobno, partiami lub w
                                częściach – od objęcia w posiadanie ostatniego Towaru, partii lub części</li>
                            <li>w przypadku Umowa sprzedaży polega na regularnym dostarczaniu rzeczy przez czas oznaczony - od objęcia w
                                posiadanie pierwszej z rzeczy;</li>
                            <li>dla pozostałych przypadków - od dnia zawarcia Umowy sprzedaży.</li>
                        </ol>
                    </li>
                    <li>Aby zachować termin do odstąpienia od Umowy sprzedaży, wystarczy, aby Konsument wysłał informację dotyczącą
                        wykonania przysługującego mu prawa odstąpienia od umowy przed upływem terminu do odstąpienia od umowy.</li>
                    <li>W celu skorzystania z uprawnienia do odstąpienia od Umowy sprzedaży Konsument jest zobowiązany dostarczyć
                        Sprzedawcy oświadczenie o odstąpieniu, preferowanie na Adres Elektroniczny <a
                            href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a> Jeżeli Konsument skorzysta z tej możliwości, Sprzedawca
                        prześle Konsumentowi niezwłocznie potwierdzenie otrzymania informacji o odstąpieniu od umowy na trwałym nośniku
                        (na przykład pocztą elektroniczną).</li>
                    <li>Oświadczenie o odstąpieniu od Umowy sprzedaży Konsument może sformułować w następujący sposób (zachowanie
                        poniższej formuły nie jest jednak obowiązkowe):</li>
                </ol>
                <p></p>
                <p style="text-align: center;"><strong>Oświadczenie o odstąpieniu od Umowy sprzedaży</strong></p>
                <p><em>Nazwa Sprzedawcy:</em><strong> <?php echo $result['companyname'] ?></strong></p>
                <p><em>Adres Sprzedawcy:</em><strong> <?php echo $result['companyadress'] ?>, <?php echo $result['companypostcode'] ?> <?php echo $result['companycity'] ?></strong></p>
                <p><em>e-mail Sprzedawcy:</em><strong> <?php echo $result['email'] ?></strong></p>
                <p><em>Niniejszym odstępuję/-jemy (*) od zawartej przez(e) mnie/nas (*) umowy zakupu następujących Towarów:
                        ____________________________________________________</em></p>
                <p><em>Zamówione w dniu (*)/otrzymane w dniu (*) ____________________________________</em></p>
                <p><em>Imię i Nazwisko Konsumenta/-ów: ____________________________________________</em></p>
                <p><em>Adres Konsumenta/-ów: ____________________________________________________</em></p>
                <p><em>Podpis Konsumenta/-ów (tylko w przypadku oświadczeń w formie papierowej):_______________________</em></p>
                <p><em>Data: ___________________________________________________________________</em></p>
                <p><em>(*) niepotrzebne skreślić</em></p>
                <p></p>
                <ol start="5" style="list-style-type: decimal;" >
                    <li>W przypadku odstąpienia od Umowy sprzedaży, umowa jest uważana za niezawartą.</li>
                    <li>Sprzedawca zwróci Konsumentowi wszelkie otrzymane płatności związane z Umową sprzedaży, od której Konsument
                        odstępuje, w szczególności Cenę Towaru oraz koszt dostawy, przy czym w zakresie zwrotu kosztów dostawy
                        Sprzedawca obowiązany jest zwrócić tylko koszt zwykłego, najtańszego sposobu dostarczenia Zamówienia,
                        oferowanego przez Sprzedawcę. Bezpośrednie koszty związane ze zwrotem Towaru, stanowiące następstwo odstąpienia
                        przez Konsumenta od Umowy sprzedaży, ponosi Konsument.</li>
                    <li>Sprzedawca dokona zwrotu płatności otrzymanych od Konsumenta, w tym Ceny Towaru oraz kosztu dostawy
                        niezwłocznie, nie później jednak niż w ciągu 14 dni od dnia otrzymania wysłanego przez Konsumenta oświadczenia o
                        odstąpieniu od Umowy sprzedaży, z zastrzeżeniem ust. 8 poniżej. Zwrot płatności nastąpi tym samym kanałem
                        płatności, jakiego Konsument użył celem zapłaty za Towar, o ile Sprzedawca i Konsument nie uzgodnią inaczej. 
                    </li>
                    <li>Konsument, który odstąpił od Umowy sprzedaży, ma obowiązek zwrócić Towar Sprzedawcy niezwłocznie, jednak nie
                        później niż 14 dni od dnia odstąpienia od umowy. Do zachowania terminu wystarczy odesłanie Towarem przed jego
                        upływem. Zwracany Towar powinien zachować stan niewykraczający poza konieczny do stwierdzenia charakteru Towaru,
                        jego cech i funkcjonowania. Sprzedawca może wstrzymać się ze zwrotem płatności za Towar do czasu otrzymania
                        rzeczy lub do czasu dostarczenia Sprzedawcy dowodu jej odesłania, w zależności od tego, które zdarzenie nastąpi
                        wcześniej.</li>
                    <li>Prawo do odstąpienia od Umowy sprzedaży nie przysługuje Konsumentowi w odniesieniu do Umów sprzedaży:<ol
                            style="list-style-type: lower-alpha;">
                            <li>w której przedmiotem świadczenia jest rzecz nieprefabrykowana, wyprodukowana według specyfikacji
                                Konsumenta lub służąca zaspokojeniu jego zindywidualizowanych potrzeb;</li>
                            <li>w której przedmiotem świadczenia jest rzecz ulegająca szybkiemu zepsuciu lub mająca krótki termin
                                przydatności do użycia;</li>
                            <li>w której przedmiotem świadczenia jest rzecz dostarczana w zapieczętowanym opakowaniu, której po otwarciu
                                opakowania nie można zwrócić ze względu na ochronę zdrowia lub ze względów higienicznych, jeżeli
                                opakowanie zostało otwarte po dostarczeniu;</li>
                            <li>w której przedmiotem świadczenia są rzeczy, które po dostarczeniu, ze względu na swój charakter, zostają
                                nierozłącznie połączone z innymi rzeczami;</li>
                            <li>w której przedmiotem świadczenia są nagrania dźwiękowe lub wizualne albo programy komputerowe
                                dostarczane w zapieczętowanym opakowaniu, jeżeli opakowanie zostało otwarte po dostarczeniu;</li>
                            <li>o dostarczanie dzienników, periodyków lub czasopism, z wyjątkiem umowy o prenumeratę;</li>
                            <li>o dostarczanie treści cyfrowych, które nie są zapisane na nośniku materialnym, jeżeli spełnianie
                                świadczenia rozpoczęło się za wyraźną zgodą konsumenta przed upływem terminu do odstąpienia od umowy i
                                po poinformowaniu go przez przedsiębiorcę o utracie prawa odstąpienia od umowy.</li>
                        </ol>
                    </li>
                    <li>Uprawnienia Konsumenta, o których mowa w niniejszym § 9, przysługują również Klientowi będącemu osobą fizyczną
                        zawierającemu umowę bezpośrednio związaną z jego działalnością gospodarczą, gdy z treści tej umowy wynika, że
                        nie posiada ona dla tej osoby charakteru zawodowego, wynikającego w szczególności z przedmiotu wykonywanej przez
                        nią działalności gospodarczej, udostępnionego na podstawie przepisów o Centralnej Ewidencji i Informacji o
                        Działalności Gospodarczej.</li>
                </ol>
                <p><strong>§10 WADY TOWARU. REKLAMACJE.</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Sprzedawca ma obowiązek dostarczyć Klientowi Towar wolny od wad.</li>
                    <li>Sprzedawca odpowiada wobec Klienta, na zasadzie rękojmi, za wady fizyczne lub prawne Towaru zakupionego przez
                        tego Klienta. W przypadku sprzedaży niestanowiącej sprzedaży konsumenckiej, wyłącza się przepisy zawarte w
                        artykułach 556-576 kodeksu cywilnego, z uwzględnieniem art. 5564 oraz 5565 kodeksu cywilnego.</li>
                    <li>Konsument ma prawo żądać obniżenia ceny, usunięcia wady, wymiany wadliwego produktu na nowy lub odstąpienia od
                        Umowy sprzedaży. Niniejsze uprawnienie przysługuje również Klientowi będącemu osobą fizyczną zawierającemu umowę
                        bezpośrednio związaną z jego działalnością gospodarczą, gdy z treści tej umowy wynika, że nie posiada ona dla
                        tej osoby charakteru zawodowego, wynikającego w szczególności z przedmiotu wykonywanej przez nią działalności
                        gospodarczej, udostępnionego na podstawie przepisów o Centralnej Ewidencji i Informacji o Działalności
                        Gospodarczej.</li>
                    <li>Klient może zgłaszać reklamacje i informacje związane z niewykonaniem lub nienależytym wykonaniem przez
                        Sprzedawcę Umowy sprzedaży, w tym wadami Towaru, lub świadczeniem usług drogą elektroniczną określonych w
                        Regulaminie w dowolnej formie, w tym w szczególności drogą elektroniczną na Adres Elektroniczny Sprzedawcy <a
                            href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a> lub drogą pocztową na adres Sprzedawcy, <?php echo $result['companyadress'] ?>,
                        <?php echo $result['companypostcode'] ?> <?php echo $result['companycity'] ?>.</li>
                    <li>Celem sprawnego rozpatrzenia zgłoszenia reklamacyjnego powinno ono zawierać:<ol
                            style="list-style-type: lower-alpha;">
                            <li>Dane zgłaszającego reklamację (imię i nazwisko/nazwę i adres Klienta, Adres Elektroniczny);</li>
                            <li>Opis zdarzenia będącego podstawą reklamacji;</li>
                            <li>Oczekiwania Klienta co do sposobu zaspokojenia żądania reklamacyjnego;</li>
                            <li>Dowód zakupu, jeśli reklamacja dotyczy zamówionego Towaru.</li>
                        </ol>
                    </li>
                    <li>W przypadku zgłoszeń reklamacyjnych dotyczących wad Towarów, Klient ma obowiązek dostarczyć wadliwy Towar na
                        adres Sprzedawcy. W wypadku Konsumenta koszt dostarczenia pokrywa Sprzedawca.</li>
                    <li>Sprzedawca w ciągu 14 (czternastu) dni kalendarzowych od otrzymania kompletnego zgłoszenia reklamacyjnego
                        ustosunkuje się do reklamacji Klienta i powiadomi go dalszych działaniach związanych z rozpatrywaną reklamacją.
                    </li>
                    <li>W przypadku rozpatrzenia reklamacji na korzyść Klienta koszty wymiany lub naprawy Towaru ponosi Sprzedawca.</li>
                    <li>Klient otrzyma informację o sposobie rozpatrzenia reklamacji drogą korespondencji elektronicznej, na Adres
                        Elektroniczny podany w zgłoszeniu reklamacyjnym.</li>
                </ol>
                <p><strong>§11 POSTANOWIENIA KOŃCOWE</strong></p>
                <ol style="list-style-type: decimal;">
                    <li>Niniejszy Regulamin wchodzi w życie dnia <?php echo $today ?></li>
                    <li>Sprzedawca zastrzega sobie prawo do jednostronnej zmiany postanowień Regulaminu, bez konieczności uzasadniania
                        przyczyn takiej zmiany, i jednocześnie zobowiązuje się do informowania Klienta o każdorazowej zmianie Regulaminu
                        poprzez umieszczenie jednolitego tekstu Regulaminu na stronie <a href="/regulamin-sklepu"><?php echo $result['compnayurl'] ?>/regulamin-sklepu</a>. Zmiany Regulaminu
                        nie mają wpływu na zamówienia złożone przez Klienta przed wejściem w życie zmian Regulaminu – zamówienia takie
                        są realizowane według postanowień Regulaminu obowiązującego w dacie składania zamówienia.   </li>
                    <li>Zmiany dokonane w Regulaminie wchodzą w życie z upływem 7 dni od momentu udostępnienia ich treści na stronie
                    <a href="/regulamin-sklepu"><?php echo $result['compnayurl'] ?>/regulamin-sklepu</a>.  W razie gdy Klient nie akceptuje nowej treści Regulaminu ma obowiązek
                        zawiadomić o tym fakcie Sprzedawcę, co skutkuje rozwiązaniem umowy o świadczenie usługi prowadzenia Konta
                        Klienta zgodnie z postanowieniami §6 Regulaminu.</li>
                    <li>W sprawach nieuregulowanych niniejszym Regulaminem zastosowanie będą miały odpowiednie przepisy prawa polskiego,
                        w szczególności przepisy Ustawy z dnia 23 kwietnia 1964 r. Kodeks cywilny (t.j. Dz.U. z 2020 r. poz. 1740 ze
                        zm.) oraz przepisy Ustawy z dnia 30 maja 2014 r. o prawach konsumenta (Dz. U. z 2020 r., poz. 287ze zm.).</li>
                    <li>Wszelkie spory wynikłe na tle wykonywania Umowy sprzedaży Strony będą starały się rozwiązać polubownie. W
                        przypadku braku porozumienia Stron będących przedsiębiorcami co do polubownego rozwiązania sporu w terminie 60
                        dni od daty zgłoszenia roszczenia, właściwym do ostatecznego rozstrzygnięcia sporu będzie sąd właściwy miejscowo
                        dla siedziby Sprzedawcy.</li>
                    <li>Sprzedawca informuje Klienta będącego Konsumentem o możliwości skorzystania z pozasądowych sposobów
                        rozpatrywania reklamacji i dochodzenia roszczeń. Należą do nich w szczególności:<ol
                            style="list-style-type: lower-alpha;">
                            <li>stały, polubowny sąd konsumencki działający przy Inspekcji Handlowej</li>
                            <li>postępowanie mediacyjne w sprawie polubownego zakończenia sporu między Klientem, a Sprzedawcą, które
                                prowadzone jest przed wojewódzkim inspektorem Inspekcji Handlowej;</li>
                            <li>pomoc w sprawie rozstrzygnięcia sporu między Klientem, a Sprzedawcą udzielana przez właściwego,
                                powiatowego (miejskiego) rzecznika konsumentów lub organizacji społecznej, do której zadań statutowych
                                należy ochrona konsumentów.</li>
                            <li>platforma internetowego systemu rozstrzygania sporów pomiędzy konsumentami i przedsiębiorcami na
                                szczeblu unijnym (platforma ODR) dostępna pod adresem <a href="http://ec.europa.eu/consumers/odr/"
                                    target="_blank" rel="nofollow">http://ec.europa.eu/consumers/odr/</a></li>
                        </ol>
                    </li>
                </ol></textarea>
                </div>
                <div class="cookiesconsent">
                    <div class="generated-title">
                        <p class="generated-title__text">Zgoda cookies</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.cookiesconsent textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.cookiesconsent','Zgoda cookies');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea readonly class="generated__textarea"><p>Korzystamy z plików cookies i podobnych technologii w celach reklamowych, analizy ruchu oraz zapewnienia pełnej funkcjonalności Sklepu. Korzystając ze Sklepu zgodnie z aktualnymi ustawieniami przeglądarki, wyrażasz zgodę na używanie plików cookies i podobnych technologii. Więcej informacji znajdziesz w <a href="/polityka-cookies" target="_blank" rel="noreferrer noopener">Polityce Cookies</a>.</p></textarea>
                </div>
                <div class="formconsent">
                    <div class="generated-title">
                        <p class="generated-title__text">Zgoda formularzy</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.formconsent textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.formconsent','Zgoda formularzy');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea readonly class="generated__textarea"><p>Akceptuję Regulamin serwisu <a href="<?php echo $result['compnayurl'] ?>"><?php echo explode('//', $result['compnayurl'])[1] ?></a> i wyrażam zgodę na przetwarzanie przez <?php echo $result['companyname'] ?> udostępnionych przeze mnie danych osobowych na warunkach opisanych w <a href="/polityka-prywatnosci" target="_blank" rel="noreferrer noopener">Polityce Prywatności</a>. Oświadczam, że są mi znane cele przetwarzania danych osobowych oraz moje uprawnienia.</p>
                <p>Zgody udzielone <?php echo $result['companyname'] ?> w zakresie wyżej wymienionej komunikacji marketingowej mogą być wycofane w dowolnym czasie, poprzez email <a href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a> bez wpływu na zgodność z prawem przetwarzania, którego dokonano na podstawie zgody przed jej cofnięciem. Administratorem danych osobowych udostępnionych w formularzu jest <?php echo $result['companyname'] ?>, <?php echo $result['companyadress'] ?>, <?php echo $result['companypostcode'] ?> <?php echo $result['companycity'] ?>  na warunkach opisanych w <a href="/polityka-prywatnosci" target="_blank" rel="noreferrer noopener">Polityce Prywatności</a>.</p></textarea>
                </div>
                <div class="newsletterconsent">
                    <div class="generated-title">
                        <p class="generated-title__text">Zgoda Newsletter</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.newsletterconsent textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.newsletterconsent','Zgoda Newsletter');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea readonly class="generated__textarea"><p>Wyrażam zgodę na otrzymywanie od <?php echo $result['companyname'] ?> cyklicznego Newslettera zawierającego informacje handlowe na podany przeze mnie adres poczty elektronicznej.</p></textarea>
                </div>
                <div class="newsletterregistryconsent">
                    <div class="generated-title">
                        <p class="generated-title__text">Zgoda Newsletter rejestracja</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.newsletterregistryconsent textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.newsletterregistryconsent','Zgoda Newsletter rejestracja');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea class="generated__textarea" readonly><p>Wyrażam zgodę na otrzymywanie od <?php echo $result['companyname'] ?> informacji handlowych, w tym cyklicznego newslettera za pomocą środków komunikacji elektronicznej, na podany w niniejszym formularzu adres poczty elektronicznej.</p></textarea>
                </div>
                <div class="refunds">
                    <div class="generated-title">
                        <p class="generated-title__text">Wymiana i zwroty</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.refunds textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.refunds','Wymiana i zwroty');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea class="generated__textarea" readonly><h2>Wymiana</h2><p>Wymiana zakupionego towaru może nastąpić przez zgłoszenie kupującego na adres mailowy <a href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a> powołując się na numer zamówienia oraz wskazując pozycje do wymiany. Następnie po zwróceniu przez zamawiającego ustalonej pozycji zamówienia ma on możliwość zamówienia interesującej go pozycji z uwzględnieniem różnicy w cenie.</p><h2>Zwroty</h2><p>Zwrot zakupionego towaru może nastąpić w wyniku postępowania reklamacyjnego oraz w przypadku zakupu dokonanego poza lokalem sprzedawcy i umów zawieranych na odległość (np. zakupionych przez telefon lub internet), a także gdy strony tak postanowiły.</p><p>W przypadku zakupu towaru przez internet na podstawie ustawy z dnia 2 marca 2000 r. o ochronie niektórych praw konsumentów oraz o odpowiedzialności za szkodę wyrządzoną przez produkt niebezpieczny, mamy prawo do zwrotu towaru bez podania jakiejkolwiek przyczyny w okresie do 14 dni.</p><p>Wysyłając towar do sprzedawcy należy dołączyć oświadczenie o odstąpieniu od umowy oraz dowód zakupu.</p><?php if ($result['guarantee'] == 1) { ?><h2>Gwarancja</h2><p>Nasze produkty są objęte gwarancją producenta. W sprawie gwarancji prosimy o kontakt mailowy <a href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a></p><?php if ($result['guarantee_text'] != NULL) { ?><p><?php echo $result['guarantee_text'] ?></p><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        } ?><?php if ($result['complaint'] == 1) { ?><h2>Reklamacja</h2><p>Nasze produkty są objęte reklamacją producenta. W sprawie reklamacji prosimy o kontakt mailowy <a href="mailto:<?php echo $result['email'] ?>"><?php echo $result['email'] ?></a></p><?php if ($result['complaint_text'] != NULL) { ?><p><?php echo $result['complaint_text'] ?></p><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        } ?>
                </textarea>
                </div>
                <div class="payments">
                    <div class="generated-title">
                        <p class="generated-title__text">Płatności</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.payments textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.payments','Płatności');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea class="generated__textarea" readonly><p>W sklepie internetowym <a href="<?php echo $result['compnayurl'] ?>"><?php echo explode('//', $result['compnayurl'])[1] ?></a> płatność za zamówienie może być realizowana następującymi metodami:<ul style="list-style-type: disc; margin-left: 30px;"><?php if ($result['cash_on_collection'] == 1) { ?><li>Płatność przy odbiorze w siedzibie firmy</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                if ($result['transfer'] == 1) { ?><li>Przelew na konto: <?php echo $result['companyaccountnumber'] ?></li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($result['cash_on_delivery'] == 1) { ?><li>Płatność za pobraniem, przy odbiorze zamówienia od kuriera</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    if ($result['pay_now'] == 1) { ?><li>Pay Now</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if ($result['pay_po'] == 1) { ?><li>Pay po</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if ($result['payu'] == 1) { ?><li>PayU</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if ($result['p24'] == 1) { ?><li>Przelewy 24</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    if ($result['tpay'] == 1) { ?><li>Tpay</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    if ($result['eservice'] == 1) { ?><li>eService</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['imoje'] == 1) { ?><li>iMoje ing</li><?php } ?></ul></p><?php if ($result['payment_text'] != NULL) { ?><p><?php echo $result['payment_text'] ?></p><?php } ?><p><?php if ($result['pay_now'] == 1) { ?><img src="/img/cms/paynow.png" alt="pay_now_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($result['pay_po'] == 1) { ?><img src="/img/cms/paypo.png" alt="pay_po_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if ($result['payu'] == 1) { ?><img src="/img/cms/payu.png" alt="payu_logo"/><img src="/img/cms/blik-logo.png" alt="blik_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    if ($result['p24'] == 1) { ?><img src="/img/cms/przelewy24.png" alt="przelewy24_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($result['tpay'] == 1) { ?><img src="/img/cms/tpay.png" alt="tpay_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($result['eservice'] == 1) { ?><img src="/img/cms/eservice.png" alt="service_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    if ($result['imoje'] == 1) { ?><img src="/img/cms/imoje-ing.png" alt="imojeing_logo"/><?php } ?></p>
                </textarea>
                </div>
                <div class="delivery">
                    <div class="generated-title">
                        <p class="generated-title__text">Wysyłka</p>
                        <div class="generated-title-buttons">
                            <button onClick="Copy(`.delivery textarea`)" id="copy" name=cookies class="generated-title__btn-copy"><i class="fa fa-clone" aria-hidden="true"></i></button>
                            <button id="download" class="generated-title__btn-download" onclick="Export2Word('.delivery','Wysyłka');"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <textarea class="generated__textarea" readonly><p>Zamówienia w sklepie internetowym <a href="<?php echo $result['compnayurl'] ?>"><?php echo explode('//', $result['compnayurl'])[1] ?></a> są dostarczane/odbierane za pośrednictwem:<ul style="list-style-type: disc; margin-left: 30px;"><?php if ($result['self_pickup'] == 1) { ?><li>odbiór osobisty w punkcie:<p><?php echo str_replace("\n", "<br />", $result['self_pickup_adress']) ?></p><p><?php echo $result['self_pickup_hours'] ?></p><p><?php echo $result['self_pickup_days'] ?></p></li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['furgonetka'] == 1) { ?><li>Furgonetka</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if ($result['apaczka'] == 1) { ?><li>Apaczka</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if ($result['dhl'] == 1) { ?><li>Dhl</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    if ($result['dpd'] == 1) { ?><li>Dpd</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if ($result['dpd_pickup'] == 1) { ?><li>Dpd Pickup</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['fedex'] == 1) { ?><li>Fedex</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['inpost_kurier'] == 1) { ?><li>Inpost kurier</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['inpost_paczkomaty'] == 1) { ?><li>Inpost paczkomaty</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($result['orlen'] == 1) { ?><li>Orlen paczka</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['poczta_polska'] == 1) { ?><li>Poczta Polska</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['ups'] == 1) { ?><li>UPS</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['self_delivery'] == 1) { ?><li>UPS</li><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    if ($result['special_transport_text'] != NULL) { ?><li>Transport z zawężeniem dostawy:<p><?php echo $result['special_transport_text'] ?></p></li><?php } ?></ul></p><?php if ($result['delivery_text'] != NULL) { ?><p><?php echo $result['delivery_text'] ?></p><?php } ?><p><?php if ($result['apaczka'] == 1) { ?><img src="/img/cms/apaczka.png" alt="apaczka_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                if ($result['dhl'] == 1) { ?><img src="/img/cms/dhl.png" alt="dhl_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['dpd'] == 1) { ?><img src="/img/cms/dpd.png" alt="dpd_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['dpd_pickup'] == 1) { ?><img src="/img/cms/dpd-pickup.png" alt="dpdpickup_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($result['fedex'] == 1) { ?><img src="/img/cms/fedex.png" alt="fedex_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($result['furgonetka'] == 1) { ?><img src="/img/cms/furgonetka.png" alt="furgonetka_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['inpost_kurier'] == 1) { ?><img src="/img/cms/inpost-kurier.png" alt="inpost_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['inpost_paczkomaty'] == 1) { ?><img src="/img/cms/inpost-paczkomaty.png" alt="inpost_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($result['orlen'] == 1) { ?><img src="/img/cms/orlen-paczka.png" alt="orlen_paczka_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            if ($result['poczta_polska'] == 1) { ?><img src="/img/cms/poczta_polska.png" alt="poczta_polska_logo"/><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($result['ups'] == 1) { ?><img src="/img/cms/ups.png" alt="ups_logo"/><?php } ?></p></textarea>
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