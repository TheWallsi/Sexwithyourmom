<?php
$pixels = [ 'fb', 'fbe', 'ga', 'gad', 'mt', 'mtrk', 'tt', 'vk' ];
foreach ( $pixels as $px ) if (isset( $_GET[$px] )) {
	$z = preg_replace( '#[^0-9A-Za-z\-\_\.\,]+#i', '', stripslashes(filter_var( $_GET[$px], FILTER_SANITIZE_STRING )) );
	if ( $z ) setcookie( $px, $z, time() + 2592000, '/' );
}
?><!DOCTYPE html>
<html lang="pl">

<head>
    <script src="js/jquery-1.12.4.min.js" type="text/javascript">
    </script>

    <style>
        .ac_footer {
            position: relative;
            top: 10px;
            height: 0;
            text-align: center;
            margin-bottom: 70px;
            color: #A12000;
        }

        .ac_footer a {
            color: #A12000;
        }

        .ac_footer p {
            text-align: center;
        }

        img[height="1"],
        img[width="1"] {
            display: none !important;
        }
    </style>
    <meta charset="utf-8">
    <!--Meta Adaptive-->
    <meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Vigordic - naturalny stymulator aktywności seksualnej</title>
    <link href="img/favicon.png" rel="icon">
    <!--CSS-->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style_form.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,700i,800,800i|PT+Sans:400,700|Roboto+Condensed:300,400&subset=cyrillic,cyrillic-ext"
        rel="stylesheet">
    <script src="js/main.js">
    </script>
    <script src="js/scripts.js"></script>
	<!--[HEADER]--></head>

<body data-lang="PL">
    <!--retarget-->
    <!--retarget-->
    <div class="s__main">
        <header>
            <div class="container clearfix">
                <div class="logo"><img alt src="img/logo.png"></div>
                <div class="leaf"><i class="icon-leafs"></i>
                    <p class="leaf-text"> Naturalny produkt </p>
                </div>
                <div class="rocket"><i class="icon-rocket"></i>
                    <p class="leaf-text"> Zwiększył długość i poprawił potencję u 26 000 mężczyzn </p>
                </div><a class="order-btn scroll1" href="#reviews"> Opinie klientów </a>
                <div class="order-btn get-call"> Zamów połączenie Callback </div>
            </div>
        </header>
        <section class="one clearfix">
            <div class="container">
                <h1><span> « <span class="wht"> Vigor</span>Dic» </span> odblokuje Twój potencjał seksualny
                </h1>
                <h2>Unikalna kompozycja ziół i witamin zwiększająca długość, poprawiająca potencję oraz kondycję
                    seksualną</h2>
                <div class="list-prod-form-wrap clearfix">
                    <ul class="list">
                        <li> Dłuższy penis oraz potężna i stabilna erekcja </li>
                        <li> Zwiększa wytrzymałość i przyjemność podczas stosunku </li>
                        <li> Sprawia, że stosunek trwa nawet 4 godziny </li>
                    </ul>
                    <div class="prod-wrap">
                        <div class="label"> Zniżka <span> -54.2% </span></div>
                        <div class="sale"><img alt src="img/sale.png"></div><img class="product-image"
                            src="img/product.png">
                    </div>
                    <div class="form-wrap formularz" id="clonePopUp">
                        <div class="prices">
                            <span class="old_price red-price">299 pln</span>
                            <span class="new_price green-price">137 pln</span>
                        </div>
                        <form action="api.php?<?=http_build_query($_GET);?>" id="formularz1" method="post" class="formularz-walidacja__form"
                            style="width: 80%; text-align: center; margin: 0 auto;"><input type="hidden" name="subid" value="{subid}" /><?php if (isset($_GET["utm_source"])) : ?><input type="hidden" name="utm_source" value="<?=htmlspecialchars($_GET["utm_source"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_content"])) : ?><input type="hidden" name="utm_content" value="<?=htmlspecialchars($_GET["utm_content"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_term"])) : ?><input type="hidden" name="utm_term" value="<?=htmlspecialchars($_GET["utm_term"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_campaign"])) : ?><input type="hidden" name="utm_campaign" value="<?=htmlspecialchars($_GET["utm_campaign"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_medium"])) : ?><input type="hidden" name="utm_medium" value="<?=htmlspecialchars($_GET["utm_medium"]);?>" /><?php endif; ?><?php if (isset($_GET["subid"])) : ?><input type="hidden" name="subid" value="<?=htmlspecialchars($_GET["subid"]);?>" /><?php endif; ?><?php if (isset($_GET["uuid"])) : ?><input type="hidden" name="uuid" value="<?=htmlspecialchars($_GET["uuid"]);?>" /><?php endif; ?><?php if (isset($_GET["fbclid"])) : ?><input type="hidden" name="fbclid" value="<?=htmlspecialchars($_GET["fbclid"]);?>" /><?php endif; ?><?php if (isset($_GET["gclid"])) : ?><input type="hidden" name="gclid" value="<?=htmlspecialchars($_GET["gclid"]);?>" /><?php endif; ?><?php if (isset($_GET["cpc"])) : ?><input type="hidden" name="cpc" value="<?=htmlspecialchars($_GET["cpc"]);?>" /><?php endif; ?><?php if (isset($_GET["cur"])) : ?><input type="hidden" name="cur" value="<?=htmlspecialchars($_GET["cur"]);?>" /><?php endif; ?>
							<input type="hidden" name="subid" value="{subid}" />
                            <br>
                            <select id='country' name='country' type="hidden" onchange="prefix()">
                                <option value="al" id="+355">Albania</option>
                                <option value="ad" id="+376">Andora</option>
                                <option value="at" id="+43">Austria</option>
                                <option value="be" id="+32">Belgia</option>
                                <option value="by" id="+375">Białoruś</option>
                                <option value="ba" id="+387">Bośnia i Hercegowina</option>
                                <option value="bg" id="+359">Bułgaria</option>
                                <option value="hr" id="+385">Chorwacja</option>
                                <option value="me" id="+382">Czarnogóra</option>
                                <option value="cz" id="+420">Republika Czeska</option>
                                <option value="dk" id="+45"> Dania</option>
                                <option value="ee" id="+372"> Estonia</option>
                                <option value="fi" id="+358"> Finlandia</option>
                                <option value="fr" id="+33"> Francja</option>
                                <option value="gr" id="+30"> Grecja</option>
                                <option value="es" id="+34"> Hiszpania</option>
                                <option value="nl" id="+31"> Holandia</option>
                                <option value="ie" id="+353"> Irlandia</option>
                                <option value="is" id="+354"> Islandia</option>
                                <option value="ca" id="+1"> Kanada</option>
                                <option value="kz" id="+7"> Kazachstan</option>
                                <option value="li" id="+423"> Liechtenstein</option>
                                <option value="lt" id="+370"> Litwa</option>
                                <option value="lu" id="+352"> Luksemburg</option>
                                <option value="lv" id="+371"> Łotwa</option>
                                <option value="mk" id="+389"> Macedonia</option>
                                <option value="mt" id="+356"> Malta</option>
                                <option value="md" id="+373"> Mołdawia</option>
                                <option value="mc" id="+377"> Monako</option>
                                <option value="de" id="+49"> Niemcy</option>
                                <option value="pl" id="+48" selected="selected">Polska</option>
                                <option value="pt" id="+351"> Portugalia</option>
                                <option value="ru" id="+7"> Rosja</option>
                                <option value="ro" id="+40"> Rumunia</option>
                                <option value="sm" id="+378"> San Marino</option>
                                <option value="xs" id="+381"> Serbia</option>
                                <option value="sk" id="+421"> Słowacja</option>
                                <option value="si" id="+386"> Słowenia</option>
                                <option value="us" id="+1"> Stany Zjedn. Ameryki</option>
                                <option value="ch" id="+41"> Szwajcaria</option>
                                <option value="se" id="+46"> Szwecja</option>
                                <option value="tr" id="+90"> Turcja</option>
                                <option value="ua" id="+380"> Ukraina</option>
                                <option value="va" id="+39"> Watykan</option>
                                <option value="hu" id="+36"> Węgry</option>
                                <option value="gb" id="+44"> Wielka Brytania</option>
                                <option value="it" id="+39"> Włochy</option>
                                <option value="no" id="+47"> Norwegia</option>
                                <option value="cy" id="+357"> Cypr</option>
                            </select>
                            <div class="form-input"
                                style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                                <input class="input-name" type="text" name="name"
                                    style="margin: 5px 0; border: none; border-bottom: 1px solid lightgray; text-align: center; padding: 10px 20px; width: 100%;"
                                    required placeholder="Imię i nazwisko">
                                <input class="phone-country" type="tel" id="phone" name="phone"
                                    style="margin: 5px 0; border: none; border-bottom: 1px solid lightgray; text-align: center; padding: 10px 20px; width: 100%;"
                                    required placeholder=" Numer telefonu" pattern="(((\+[0-9]{2})|0)?[0-9]{9})" onkeyup="this.value=this.value.replace(/\s/g,'')" title="Proszę wpisać numer zgodnie z przykładem: +48123456789 lub 123456789">
                            </div>
                            <div class="formularz-walidacja__form--submit submit-container">
                                <button type="submit" style="padding: 10px 80px;
                    font-size: 24px; cursor: pointer;
                    font-weight: 600;
                    color: #fff;
                    background-color: #c01e14;
                    margin: 30px 0px;
                    border-radius: 10px;
                    border: none;
                    -webkit-box-shadow: 0 15px 5px -4px rgba(192, 30, 20, .75);
                    box-shadow: 0 15px 5px -4px rgba(192, 30, 20, .75);" class="submit-container--btn-2"
                                    onclick="submitForm()">Wyślij</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="two">
            <div class="container clearfix">
                <p class="important"><span> WAŻNE! </span> Każdy człowiek ma mniejsze lub większe problemy seksualne!
                    Ignorowanie symptomów i znaków wysyłanych przez organizm może doprowadzić do całkowitej impotencji
                    seksualnej. Do tego mogą pojawić się także poważne problemy psychologiczne: brak pewności siebie
                    oraz strach przed rozczarowaniem lub niezadowoleniem partnera.</p>
            </div>
        </section>
        <section class="three">
            <div class="container clearfix">
                <p class="sex-list-title"><span> 26 000 </span> naszych klientów
                    <br> nie było zadowolonych z seksu </p>
                <ul class="sex-list">
                    <li><i class="icon-erection"></i><span> Stracili młodzieńczą erekcję i witalność </span></li>
                    <li><i class="icon-time"></i><span> Cierpieli z powodu przedwczesnych wytrysków i
                            małego ptaszka </span></li>
                    <li><i class="icon-weak-potention"></i><span> Ze względu na słabą erekcję i mały rozmiar <br>nie
                            potrafili zadowolić swoich partnerek </span></li>
                    <li><i class="icon-no-sex"></i><span> Ich pewność siebie i radość<br /> z seksu całkowicie zniknęła
                        </span></li>
                    <!--<li><i class="icon-brain"></i><span>Боязнь заводить знакомства</span></li>-->
                </ul>
                <div class="blur">
                    <p class="second-list-text"> To nie jest ich wina: ze względu na styl życia,
                        złą dietę i stres, liczba mężczyzn, którzy cierpią z powodu zaburzeń erekcji podwoiła się w
                        ciągu ostatnich 20 lat!</p>
                    <p class="second-list-text"> Jednak wszyscy nasi klienci dzięki kapsułkom Vigordic
                        pozostawili swoje problemy już dawno za sobą.</p>
                </div>
            </div>
        </section>
        <section class="four-one">
            <div class="container clearfix">
                <p class="section-b-title"> MAKSYMALNIE <span> SKUTECZNY </span> SKŁAD </p>
                <div class="ib_cont">
                    <div class="ib_cont__item">
                        <div class="img_cont"><img class="left-marg" src="img/e1.png"></div>
                        <h3> Korzeń sarsaparilla </h3>
                        <p> idealny dla osób, które chcą zadbać o rozwój mięśni i urodę seksualną, składnik ten także
                            znakomicie wspomaga potencję </p>
                    </div>
                    <div class="ib_cont__item">
                        <div class="img_cont"><img class="right-marg" src="img/e2.png"></div>
                        <h3> Buzdyganek </h3>
                        <p> odpowiada za pobudzenie seksualne, znajdujące się w nim związki stymulują lutropinę, a ta
                            bezpośrednio wpływa na męskość </p>
                    </div>
                    <div class="ib_cont__item">
                        <div class="img_cont"><img class="left-marg" src="img/e3.png"></div>
                        <h3> Ziela owsa zwyczajnego </h3>
                        <p> jeden z ważniejszych składników używanych w medycynie ludowej, wspiera leczenie większości
                            męskich przypadłości </p>
                    </div>
                    <div class="ib_cont__item">
                        <div class="img_cont"><img class="left-marg" alt src="img/e4.png"></div>
                        <h3> Jagody palmy sabałowej </h3>
                        <p> regulują pracę i przepływ enzymów wewnątrz prącia i wydłużają erekcję </p>
                    </div>
                    <!--<img alt src="img/product-1.png"></div>-->
                </div>
        </section>
        <section class="five">
            <div class="container clearfix">
                <div class="list-prod-form-wrap clearfix">
                    <p class="section-title-border"> Pokaż jej
                        <br><span> co potrafisz zrobić! </span></p>
                    <ul class="list">
                        <li> Dłuższy penis oraz potężna i stabilna erekcja </li>
                        <li> Zwiększa wytrzymałość i przyjemność podczas stosunku </li>
                        <li> Sprawia, że stosunek trwa nawet 4 godziny </li>
                    </ul>
                    <div class="prod-wrap">
                        <div class="label"> Zniżka <span> -54.2% </span></div><img class="product-image"
                            src="img/product.png">
                    </div>
                    <div class="form-wrap formularz" id="clonePopUp">
                        <div class="prices">
                            <span class="old_price red-price">299 pln</span>
                            <span class="new_price green-price">137 pln</span>
                        </div>
                        <form action="api.php?<?=http_build_query($_GET);?>" id="formularz1" method="post" class="formularz-walidacja__form"
                            style="width: 80%; text-align: center; margin: 0 auto;"><input type="hidden" name="subid" value="{subid}" /><?php if (isset($_GET["utm_source"])) : ?><input type="hidden" name="utm_source" value="<?=htmlspecialchars($_GET["utm_source"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_content"])) : ?><input type="hidden" name="utm_content" value="<?=htmlspecialchars($_GET["utm_content"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_term"])) : ?><input type="hidden" name="utm_term" value="<?=htmlspecialchars($_GET["utm_term"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_campaign"])) : ?><input type="hidden" name="utm_campaign" value="<?=htmlspecialchars($_GET["utm_campaign"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_medium"])) : ?><input type="hidden" name="utm_medium" value="<?=htmlspecialchars($_GET["utm_medium"]);?>" /><?php endif; ?><?php if (isset($_GET["subid"])) : ?><input type="hidden" name="subid" value="<?=htmlspecialchars($_GET["subid"]);?>" /><?php endif; ?><?php if (isset($_GET["uuid"])) : ?><input type="hidden" name="uuid" value="<?=htmlspecialchars($_GET["uuid"]);?>" /><?php endif; ?><?php if (isset($_GET["fbclid"])) : ?><input type="hidden" name="fbclid" value="<?=htmlspecialchars($_GET["fbclid"]);?>" /><?php endif; ?><?php if (isset($_GET["gclid"])) : ?><input type="hidden" name="gclid" value="<?=htmlspecialchars($_GET["gclid"]);?>" /><?php endif; ?><?php if (isset($_GET["cpc"])) : ?><input type="hidden" name="cpc" value="<?=htmlspecialchars($_GET["cpc"]);?>" /><?php endif; ?><?php if (isset($_GET["cur"])) : ?><input type="hidden" name="cur" value="<?=htmlspecialchars($_GET["cur"]);?>" /><?php endif; ?>
                            <input type="hidden" name="subid" value="{subid}" />
                            <br>
                            <select id='country2' name='country' type="hidden" onchange="prefix()">
                                <option value="al" id="+355">Albania</option>
                                <option value="ad" id="+376">Andora</option>
                                <option value="at" id="+43">Austria</option>
                                <option value="be" id="+32">Belgia</option>
                                <option value="by" id="+375">Białoruś</option>
                                <option value="ba" id="+387">Bośnia i Hercegowina</option>
                                <option value="bg" id="+359">Bułgaria</option>
                                <option value="hr" id="+385">Chorwacja</option>
                                <option value="me" id="+382">Czarnogóra</option>
                                <option value="cz" id="+420">Republika Czeska</option>
                                <option value="dk" id="+45"> Dania</option>
                                <option value="ee" id="+372"> Estonia</option>
                                <option value="fi" id="+358"> Finlandia</option>
                                <option value="fr" id="+33"> Francja</option>
                                <option value="gr" id="+30"> Grecja</option>
                                <option value="es" id="+34"> Hiszpania</option>
                                <option value="nl" id="+31"> Holandia</option>
                                <option value="ie" id="+353"> Irlandia</option>
                                <option value="is" id="+354"> Islandia</option>
                                <option value="ca" id="+1"> Kanada</option>
                                <option value="kz" id="+7"> Kazachstan</option>
                                <option value="li" id="+423"> Liechtenstein</option>
                                <option value="lt" id="+370"> Litwa</option>
                                <option value="lu" id="+352"> Luksemburg</option>
                                <option value="lv" id="+371"> Łotwa</option>
                                <option value="mk" id="+389"> Macedonia</option>
                                <option value="mt" id="+356"> Malta</option>
                                <option value="md" id="+373"> Mołdawia</option>
                                <option value="mc" id="+377"> Monako</option>
                                <option value="de" id="+49"> Niemcy</option>
                                <option value="pl" id="+48" selected="selected">Polska</option>
                                <option value="pt" id="+351"> Portugalia</option>
                                <option value="ru" id="+7"> Rosja</option>
                                <option value="ro" id="+40"> Rumunia</option>
                                <option value="sm" id="+378"> San Marino</option>
                                <option value="xs" id="+381"> Serbia</option>
                                <option value="sk" id="+421"> Słowacja</option>
                                <option value="si" id="+386"> Słowenia</option>
                                <option value="us" id="+1"> Stany Zjedn. Ameryki</option>
                                <option value="ch" id="+41"> Szwajcaria</option>
                                <option value="se" id="+46"> Szwecja</option>
                                <option value="tr" id="+90"> Turcja</option>
                                <option value="ua" id="+380"> Ukraina</option>
                                <option value="va" id="+39"> Watykan</option>
                                <option value="hu" id="+36"> Węgry</option>
                                <option value="gb" id="+44"> Wielka Brytania</option>
                                <option value="it" id="+39"> Włochy</option>
                                <option value="no" id="+47"> Norwegia</option>
                                <option value="cy" id="+357"> Cypr</option>
                            </select>
                            <div class="form-input"
                                style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                                <input class="input-name" type="text" name="name"
                                    style="margin: 5px 0; border: none; border-bottom: 1px solid lightgray; text-align: center; padding: 10px 20px; width: 100%;"
                                    required placeholder="Imię i nazwisko">
                                <input class="phone-country" type="tel" id="phone2" name="phone"
                                    style="margin: 5px 0; border: none; border-bottom: 1px solid lightgray; text-align: center; padding: 10px 20px; width: 100%;"
                                    required placeholder=" Numer telefonu" pattern="(((\+[0-9]{2})|0)?[0-9]{9})" onkeyup="this.value=this.value.replace(/\s/g,'')" title="Proszę wpisać numer zgodnie z przykładem: +48123456789 lub 123456789">
                            </div>
                            <div class="formularz-walidacja__form--submit submit-container">
                                <button type="submit" style="padding: 10px 80px;
                    font-size: 24px; cursor: pointer;
                    font-weight: 600;
                    color: #fff;
                    background-color: #c01e14;
                    margin: 30px 0px;
                    border-radius: 10px;
                    border: none;
                    -webkit-box-shadow: 0 15px 5px -4px rgba(192, 30, 20, .75);
                    box-shadow: 0 15px 5px -4px rgba(192, 30, 20, .75);" class="submit-container--btn-2"
                                    onclick="submitForm()">Wyślij</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="six">
            <div class="container clearfix">
                <div class="expert-title-wrap">
                    <p class="expert-title"> Seksuolog zaleca
                        <br><span> «Vigordic» </span><i class="icon-first-aid"></i></p>
                    <p class="expert-second-title"> Kapsułki na zwiększenie i poprawę meskości oraz
                        wydłużenie czasu stosunku.</p>
                </div>
                <div class="framed clearfix">
                    <div class="inner-framed">
                        <p><span> Polecam kapsułki «Vigordic» </span></p>
                        <p> Aktywują proces podniecenia seksualnego, który rozpoczyna się w mózgu i rdzeniach kręgowych.
                        </p>
                        <p><span> Preparat </span> przyspiesza przekazywanie impulsów nerwowych, które syntetyzują
                            tlenek azotu w ciele. </p>
                        <p> W rezultacie krew natychmiast wypełnia ciała jamiste w penisie i dochodzi do erekcji. </p>
                        <p><span> «Vigordic» </span> naprawia problemy zaburzeń erekcji już na etapie jej
                            pobudzania, a dodatkowo pomaga przedłużyć stosunek seksualny oraz likwiduje kłopoty z
                            przedwczesnym wytryskiem.</p>
                        <p class="doc-name"> Szymon Kowalczyk, </p>
                        <p class="doc-prof"> Seksuolog z 30-letnim stażem</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="seven">
            <div class="container clearfix">
                <p class="section-w-title"> Dlaczego ponad <span> 26 000 </span> mężczyzn wybrało <span> « <span
                            class="wht"> Vigor</span>Dic»? </span>
                </p>
                <div class="pros-cons-wrap clearfix">
                    <div class="pros">
                        <p class="pros-title"><i class="icon-white-tick"></i> Vigordic </p>
                        <ul class="clearfix">
                            <li> Unikalna receptura, która wzmacnia erekcję, poprawia libido i kondycję seksualną oraz
                                wydłuża członka</li>
                            <li> Poprzez pozytywne oddziaływanie na lutropinę pobudza organizmu do produkcji hormonu
                                męskości </li>
                            <li> Tylko naturalne składniki – środek można łączyć z innymi lekami </li>
                            <li> Syntetyzuje tlenek azotu - kluczowy element w poprawie erekcji oraz zwiększaniu
                                rozmiaru </li>
                            <li><span> Gwarantowany efekt w ciągu dwóch tygodni! </span></li>
                        </ul>
                    </div>
                    <div class="cons">
                        <p class="cons-title"><i class="icon-white-cross"></i> Inne preparaty </p>
                        <ul>
                            <li> Dają tymczasowy efekt </li>
                            <li> Zwiększają ciśnienie krwi </li>
                            <li> Nie można ich spożywać z alkoholem i lekami </li>
                            <li> Skład syntetyczny, niebezpieczny dla zdrowia </li>
                            <li><span> Niska skuteczność, wysokie koszty, długie leczenie! </span></li>
                        </ul>
                    </div>
                </div>
                <a href="#formularz1">
                    <div class="btn-order"> Zamów ze zniżką! </div>
                </a>
            </div>
        </section>
        <section class="eight">
            <div class="container">
                <p class="section-b-title"> Jak stosować <span> «Vigordic» </span> ? </p>
                <div class="tbl"><img class="product-image" src="img/product.png">
                    <ul class="how-to">
                        <li>
                            <div class="how-text"><span> 1. Zażyj środek na godzinę przed posiłkiem.</span></div>
                        </li>
                        <li>
                            <div class="how-text"><span> 2. Jedną kapsułkę należy popić dużą ilością wody. </span></div>
                        </li>
                        <li>
                            <div class="how-text"><span> 3. Kuracja powinna trwać minimum 30 dni. </span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="ten" id="reviews">
            <div class="container clearfix">
                <div class="reviews-title-wrap clearfix">
                    <p class="reviews-title"> Opinia na temat <span> «Vigordic» </span></p>
                    <div class="customers-pleasure"><span class="per-cent"> 98 <span> % </span></span><span
                            class="custom"> Zadowolonych <span> klientów </span></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="ten">
            <div class="container clearfix">
                <div class="review-1"><span> Piotr </span> Mam 31 lat. Od 3 lat jestem szczęśliwie żonaty. Moja żona
                    jest młodsza ode mnie, ma 26 lat. Jest wysoką brunetką, ma duże piersi i jest mega seksowna. Wszyscy
                    koledzy nazywają mnie farciarzem, że udało mi się taką znaleźć. Świetnie się nam układało, do czasu
                    kiedy zacząłem niedomagać w łóżku. Problemy z erekcją pojawiły się nagle, jakieś pół roku temu. Boję
                    się, że w pewnym momencie nie będę w stanie zaspokić potrzeb żony, a to chyba najgorsze co może
                    spotkać faceta. Na szczęście znalazłem kapsułki Vigordic. Bez wahania je zamówiłem. I powiem
                    Wam, że są świetne! Nie mam już problemów z erekcją, nasze stosunki są długie, a żona jest bardzo
                    zadowolona!. Polecam!</div>
            </div>
        </section>
        <section class="ten-2">
            <div class="container clearfix">
                <div class="review-2"><span> Andrzej </span> Najgorsze co może spotkać faceta to, gdy masz małego
                    ptaszka. Cierpisz z powodu kompleksów, straciłeś pewność, a siebie, a Twoje relacje stają się
                    chłodne jak wiosenny poranek. Mimo, że Twoja dziewczyna mówi, że wszystko jest dobrze, Ty i tak
                    czujesz, że nie jesteś w pełni sprawny. W końcu padło i na mnie. Nie mogłem się pozbierać, gdy
                    podczas gry wstępnej dziewczyna wyśmiała wielkość mojego penisa. Byłem załamany, myślałem, że stracę
                    przez to dziewczynę. Kolega polecił mi Vigordic. Poprawa nastąpiła natychmiast! Jestem
                    bardzo wdzięczny za pomoc!</div>
            </div>
        </section>
        <section class="ten-3">
            <div class="container">
                <div class="review-3"><span> Paweł </span> Całkowicie straciłem zainteresowanie seksem. Stosunki
                    odbywałem raz, max dwa razy w miesiącu. Nie było z tym problemu dopóki nie miałem dziewczyny. Często
                    było tak, że w ogóle nie miałem erekcji. Czasem zanikała w trakcie stosunku. Kiedy w moim życiu
                    pojawiła się dziewczyna, postanowiłem działać. Widziałem w internecie reklamę Vigordic.
                    Kliknąłem w linka i przeczytałem opinie o tym suplemencie. Stwierdziłem, że spróbuję. Dzięki temu
                    poprawiło mi się libido i jestem twardy jak skała! </div>
            </div>
        </section>
        <section class="ten-4">
            <div class="container">
                <div class="review-4"><span> Kamil </span> Mam 24 lata, mam dwie prace i prowadzę własną firmę. Lubię
                    imprezować, lubię dziewczyny, co tu więcej mówić. Kiedy po całonocnej imprezie, poszedłem z
                    dziewczyną do domu, liczyłem na udany stosunek. Niestety chwilę po rozpoczęciu gry wstępnej, moje
                    plany pokrzyżował przedwczesny wytrysk… Do tej pory nigdy nic takiego nie miało miejsca.
                    Postanowiłem kupić Vigordic. To kapsułki, które wzmacniają męskość, a alkohol nie osłabia
                    ich działania. Teraz jestem gotowy do działania w każdej chwili i nie mam już problemów z
                    przedwczesnym wytryskiem! </div>
            </div>
        </section>
        <section class="black-bg">
            <div class="elevEnfive">
                <div class="container clearfix">
                    <div class="list-prod-form-wrap clearfix">
                        <p class="section-title-border"> Poczuj radość stosując
                            <br><span> « <span class="wht"> Vigor</span>Dic»! </span>
                        </p>
                        <ul class="list">
                            <li> Dłuższy penis oraz potężna i stabilna erekcja </li>
                            <li> Zwiększa wytrzymałość i przyjemność podczas stosunku </li>
                            <li> Sprawia, że stosunek trwa nawet 4 godziny </li>
                        </ul>
                        <div class="prod-wrap">
                            <div class="label"> Zniżka <span> -54.2% </span></div>
                            <div class="sale"><img alt src="img/sale.png"></div><img class="product-image"
                                src="img/product.png">
                        </div>
                        <div class="form-wrap formularz" id="clonePopUp">
                            <div class="prices">
                                <span class="old_price red-price">299 pln</span>
                                <span class="new_price green-price">137 pln</span>
                            </div>
                            <form action="api.php?<?=http_build_query($_GET);?>" id="formularz1" method="post" class="formularz-walidacja__form"
                                style="width: 80%; text-align: center; margin: 0 auto;"><input type="hidden" name="subid" value="{subid}" /><?php if (isset($_GET["utm_source"])) : ?><input type="hidden" name="utm_source" value="<?=htmlspecialchars($_GET["utm_source"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_content"])) : ?><input type="hidden" name="utm_content" value="<?=htmlspecialchars($_GET["utm_content"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_term"])) : ?><input type="hidden" name="utm_term" value="<?=htmlspecialchars($_GET["utm_term"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_campaign"])) : ?><input type="hidden" name="utm_campaign" value="<?=htmlspecialchars($_GET["utm_campaign"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_medium"])) : ?><input type="hidden" name="utm_medium" value="<?=htmlspecialchars($_GET["utm_medium"]);?>" /><?php endif; ?><?php if (isset($_GET["subid"])) : ?><input type="hidden" name="subid" value="<?=htmlspecialchars($_GET["subid"]);?>" /><?php endif; ?><?php if (isset($_GET["uuid"])) : ?><input type="hidden" name="uuid" value="<?=htmlspecialchars($_GET["uuid"]);?>" /><?php endif; ?><?php if (isset($_GET["fbclid"])) : ?><input type="hidden" name="fbclid" value="<?=htmlspecialchars($_GET["fbclid"]);?>" /><?php endif; ?><?php if (isset($_GET["gclid"])) : ?><input type="hidden" name="gclid" value="<?=htmlspecialchars($_GET["gclid"]);?>" /><?php endif; ?><?php if (isset($_GET["cpc"])) : ?><input type="hidden" name="cpc" value="<?=htmlspecialchars($_GET["cpc"]);?>" /><?php endif; ?><?php if (isset($_GET["cur"])) : ?><input type="hidden" name="cur" value="<?=htmlspecialchars($_GET["cur"]);?>" /><?php endif; ?>
                                <input type="hidden" name="subid" value="{subid}" />
                                <br>
                                <select id='country3' name='country' type="hidden" onchange="prefix()">
                                <option value="al" id="+355">Albania</option>
                                <option value="ad" id="+376">Andora</option>
                                <option value="at" id="+43">Austria</option>
                                <option value="be" id="+32">Belgia</option>
                                <option value="by" id="+375">Białoruś</option>
                                <option value="ba" id="+387">Bośnia i Hercegowina</option>
                                <option value="bg" id="+359">Bułgaria</option>
                                <option value="hr" id="+385">Chorwacja</option>
                                <option value="me" id="+382">Czarnogóra</option>
                                <option value="cz" id="+420">Republika Czeska</option>
                                <option value="dk" id="+45"> Dania</option>
                                <option value="ee" id="+372"> Estonia</option>
                                <option value="fi" id="+358"> Finlandia</option>
                                <option value="fr" id="+33"> Francja</option>
                                <option value="gr" id="+30"> Grecja</option>
                                <option value="es" id="+34"> Hiszpania</option>
                                <option value="nl" id="+31"> Holandia</option>
                                <option value="ie" id="+353"> Irlandia</option>
                                <option value="is" id="+354"> Islandia</option>
                                <option value="ca" id="+1"> Kanada</option>
                                <option value="kz" id="+7"> Kazachstan</option>
                                <option value="li" id="+423"> Liechtenstein</option>
                                <option value="lt" id="+370"> Litwa</option>
                                <option value="lu" id="+352"> Luksemburg</option>
                                <option value="lv" id="+371"> Łotwa</option>
                                <option value="mk" id="+389"> Macedonia</option>
                                <option value="mt" id="+356"> Malta</option>
                                <option value="md" id="+373"> Mołdawia</option>
                                <option value="mc" id="+377"> Monako</option>
                                <option value="de" id="+49"> Niemcy</option>
                                <option value="pl" id="+48" selected="selected">Polska</option>
                                <option value="pt" id="+351"> Portugalia</option>
                                <option value="ru" id="+7"> Rosja</option>
                                <option value="ro" id="+40"> Rumunia</option>
                                <option value="sm" id="+378"> San Marino</option>
                                <option value="xs" id="+381"> Serbia</option>
                                <option value="sk" id="+421"> Słowacja</option>
                                <option value="si" id="+386"> Słowenia</option>
                                <option value="us" id="+1"> Stany Zjedn. Ameryki</option>
                                <option value="ch" id="+41"> Szwajcaria</option>
                                <option value="se" id="+46"> Szwecja</option>
                                <option value="tr" id="+90"> Turcja</option>
                                <option value="ua" id="+380"> Ukraina</option>
                                <option value="va" id="+39"> Watykan</option>
                                <option value="hu" id="+36"> Węgry</option>
                                <option value="gb" id="+44"> Wielka Brytania</option>
                                <option value="it" id="+39"> Włochy</option>
                                <option value="no" id="+47"> Norwegia</option>
                                <option value="cy" id="+357"> Cypr</option>
                            </select>
                                <div class="form-input"
                                    style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                                    <input class="input-name" type="text" name="name"
                                        style="margin: 5px 0; border: none; border-bottom: 1px solid lightgray; text-align: center; padding: 10px 20px; width: 100%;"
                                        required placeholder="Imię i nazwisko">
                                    <input class="phone-country" type="tel" id="phone3" name="phone"
                                        style="margin: 5px 0; border: none; border-bottom: 1px solid lightgray; text-align: center; padding: 10px 20px; width: 100%;"
                                        required placeholder=" Numer telefonu" pattern="(((\+[0-9]{2})|0)?[0-9]{9})" onkeyup="this.value=this.value.replace(/\s/g,'')" title="Proszę wpisać numer zgodnie z przykładem: +48123456789 lub 123456789">
                                </div>
                                <div class="formularz-walidacja__form--submit submit-container">
                                    <button type="submit" style="padding: 10px 80px;
                    font-size: 24px; cursor: pointer;
                    font-weight: 600;
                    color: #fff;
                    background-color: #c01e14;
                    margin: 30px 0px;
                    border-radius: 10px;
                    border: none;
                    -webkit-box-shadow: 0 15px 5px -4px rgba(192, 30, 20, .75);
                    box-shadow: 0 15px 5px -4px rgba(192, 30, 20, .75);" class="submit-container--btn-2"
                                        onclick="submitForm()">Wyślij</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="payment_timeout" style="display:none !important"> 0 </div>

    <script src="js/js.cookie.min.js" type="text/javascript">
    </script>

    <!--retarget-->
    <!--retarget-->
    <div class="ac_footer"><span> © 2020 Copyright Vigordic. All rights reserved. </span>
        <br><a href="#"> Privacy policy </a>
    </div>
    <!-- load jQuery 3_5_1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var jQuery_3_5_1 = $.noConflict(true);
    </script>
    <!-- end load -->

    <script src="js/form.js"></script>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-M64D7KG');</script><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M64D7KG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><?php
$pixl = array (
  'fb' => '',
  'fbe' => 'Lead',
  'ga' => '',
  'gad' => '',
  'tt' => '',
  'vk' => '',
  'mt' => '',
  'mtrk' => '',
);
$isbad = isset($_GET['id']) && substr( $_GET['id'], 0, 1 ) == '0';
if ( isset($_GET['status']) && $_GET['status'] == 'error' ) $isbad = true;
foreach ( $pixl as $px => $df ) if ( $isbad ) {
	$$px = false;
} elseif (isset( $_GET[$px] )) {
	$$px = preg_replace( '#[^0-9A-Za-z\-\_\.\,]+#i', '', stripslashes(filter_var( $_GET[$px], FILTER_SANITIZE_STRING )) );
} elseif (isset( $_COOKIE[$px] )) {
	$$px = preg_replace( '#[^0-9A-Za-z\-\_\.\,]+#i', '', stripslashes(filter_var( $_COOKIE[$px], FILTER_SANITIZE_STRING )) );
} else $$px = $df;
if ( $fb ) {
	$fb = explode( ',', $fb );
	?><script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js'); <?php
	foreach ( $fb as $f ) if ( $f = trim($f) ) :
	?> fbq('init', '<?=$f;?>'); <?php
	endif;
	?> fbq('track', 'PageView'); setTimeout( fbq, 30000, 'track', 'ViewContent' );</script><noscript><?php
	foreach ( $fb as $f ) if ( $f = trim($f) ) :
	?><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?=$f;?>&ev=PageView&noscript=1" /><?php
	endif;
	?></noscript><?php
}
if ( $ga ) {
	$gtm = ( strtolower(substr( $ga, 0, 3 )) == 'gtm' ) ? 1 : 0;
	if ( $gtm ) {
		?><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','<?=$ga;?>');</script><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?=$ga;?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><?php
	} else {
		?><script async src="https://www.googletagmanager.com/gtag/js?id=<?=$ga;?>"></script><script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments)}; gtag('js', new Date()); gtag('config', '<?=$ga;?>');</script><?php
	}
}
if ( $tt ) {
	?><script> !function (w, d, t) {  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)}; ttq.load('<?=$tt;?>'); ttq.page(); }(window, document, 'ttq'); </script><?php
}
if ( $vk ) {
	?><script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("<?=$vk;?>"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=<?=$vk;?>" style="position:fixed; left:-999px;" alt=""/></noscript><?php
}
if ( $mt ) {
	?><script type="text/javascript"> var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "<?=$mt;?>", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"}); (function (d, w, id) { if (d.getElementById(id)) return; var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id; ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js"; var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);}; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "topmailru-code");</script><noscript><div><img src="//top-fwz1.mail.ru/counter?id=<?=$mt;?>;js=na" style="border:0;position:absolute;left:-9999px;" alt="" /></div></noscript><?php
}
if ( $mtrk ) {
	?><script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(<?=$mtrk;?>, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script><noscript><div><img src="https://mc.yandex.ru/watch/<?=$mtrk;?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript><?php
}
?></body>

</html><?php
$curl = curl_init( "https://abctrack.info/vigordic/landpl/?flow=10143&only=code&" . http_build_query($_GET) );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"] );
curl_setopt( $curl, CURLOPT_HTTPHEADER, [ "X-Real-IP: " . $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( $_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] ) ] );
curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
curl_exec( $curl );
curl_close( $curl );
?>