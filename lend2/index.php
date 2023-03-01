<?php
$pixels = [ 'fb', 'fbe', 'ga', 'gad', 'mt', 'mtrk', 'tt', 'vk' ];
foreach ( $pixels as $px ) if (isset( $_GET[$px] )) {
	$z = preg_replace( '#[^0-9A-Za-z\-\_\.\,]+#i', '', stripslashes(filter_var( $_GET[$px], FILTER_SANITIZE_STRING )) );
	if ( $z ) setcookie( $px, $z, time() + 2592000, '/' );
}
?><!DOCTYPE html>
<html lang="pl">
  <head>
    <style>
        .hide , .flag-dropdown {display: none;} /* обязательно */
        .error-box{ /* CSS ошибки */
            color: #fff;
            background-color: #DE5042;
            border-radius: 5px;
            text-align: center;
            width: 280px;
            font-size: 13px;
            line-height: 20px;
            margin:0 auto 10px;
        }
    </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vigordic</title>
    <link rel="preload" href="css/style.min.css" as="style">
    <link href="css/style.min.css" rel="stylesheet">
    <!--[HEADER]-->  </head>

  <body>
    <header class="page-header">
      <div class="page-header__wrapper">
        <h2 class="page-header__title">
          Wyjątkowo naturalny stymulator aktywności seksualnej i polepszenia potencji
        </h2>
      </div>
    </header>

    <section class="enlarge">
      <div class="enlarge__wrapper">
        <p class="enlarge__logo">
         <p style="font-size: 32px; font-weight: 600;">Vigordic</p> 
        </p>
        <p class="enlarge__image">
          <img src="img/gif3.gif" alt="gif" width="291" height="225">
          <img class="enlarge__product" src="img/product.png" alt="product" width="125" height="300">
        </p>

      </div>
    </section>

    <section class="enlarge-description">
      <div class="enlarge-description__wrapper">
        <h2 class="visually-hidden">description</h2>
        <p class="enlarge-description__title">
        Kapsułki Vigordic na męskość
 <span>o 100% naturalnym składzie</span>
        </p>
        <ul class="enlarge-description__list">
          <li class="enlarge-description__item">
            Żelazny długi członek już po kilku minutach stosowania
          </li>
          <li class="enlarge-description__item">
            Powiedz NIE przedwczesnej erekcji: będziesz miał czas aby się nacieszyć stosunkiem, seksem analnym
          </li>
          <li class="enlarge-description__item">
            Polepszenie wytrzymałości: łatwo i chętnie będziesz mógł uprawiać seks z kilkoma partnerkami na raz
          </li>
          <li class="enlarge-description__item">
            Wzmocnienie wrażeń: jeszcze nie doświadczyłeś takich orgazmów
          </li>
          <li class="enlarge-description__item">
            Przyjemny smak spermy: ona będzie prosić jeszcze i jeszcze
          </li>
        </ul>
      </div>
    </section>

    <section class="advantages">
      <div class="advantages__wrapper">
        <h2 class="advantages__title">
          Przestańcie oglądać porno i marzyć o różnorodnym seksie. Zacznij, w końcu, normalnie uprawiać seks!
        </h2>
        <img class="advantages__image" src="img/gif4.gif" alt="gif" width="322" height="188">
        <h2 class="advantages__list-title">
          Spodoba się wam
        </h2>
        <ul class="advantages__list">
          <li class="advantages__item">
            Absolutnie nowe możliwości w seksie, niezależnie od wieku
          </li>
          <li class="advantages__item">
            Długotrwały rezultat, nie będziesz musiał co chwilę powtarzać kuracji
          </li>
          <li class="advantages__item">
           Kapsułki nie powodują problemów z sercem ani innymi narządami
          </li>
        </ul>
      </div>
    </section>

    <section class="if-you-think">
      <div class="if-you-think__wrapper">
        <p class="if-you-think__text">
          Jeśli uważasz, że twój stosunek jest doskonały, w takim razie spróbuj kapsułki  <span>Vigordic</span>
          <img class="if-you-think__image" src="img/product1.png" alt="product" width="100" height="250">
        </p>
      </div>
    </section>

    <section class="order-form">
      <div class="order-form__wrapper">
        <h2 class="visually-hidden">
          Order form
        </h2>

        <div class="order-form__price">
          <h2 class="order-form__title">
            Zrozumiesz, że jesteś w błędzie
          </h2>
          <div class="price-container">
            <span class="old-price oldPriceAndLabelForLandingInfoApi">299 pln</span>
            <span class="new-price priceAndLabelForLandingInfoApi">137 pln</span>
          </div>
        </div>
        <div class="form_wrapper_2"
    style="margin: 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%">
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
                                    style="margin: 5px 0;padding: 10px 0px; border: none; border-bottom: 1px solid lightgray; text-align: center; padding: 20px 20px; width: 100%;font-size: 24px;"
                                    required placeholder="Imię i nazwisko">
                                <input class="phone-country" type="tel" id="phone" name="phone"
                                    style="margin: 5px 0;padding: 10px 0px; border: none; border-bottom: 1px solid lightgray; text-align: center; padding: 20px 20px; width: 100%;font-size: 24px;"
                                    required placeholder=" Numer telefonu" pattern="(((\+[0-9]{2})|0)?[0-9]{9})" onkeyup="this.value=this.value.replace(/\s/g,'')" title="Proszę wpisać numer zgodnie z przykładem: +48123456789 lub 123456789">
                            </div>
                            <div class="formularz-walidacja__form--submit submit-container" style="
    display: flex;
    justify-content: center;
">
                                <button type="submit" style="padding: 30px 80px;
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

  <!-- load jQuery 3_5_1 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    var jQuery_3_5_1 = $.noConflict(true);
  </script>
  <!-- end load -->

  <script src="js/form.js"></script>
        
        <br />
        <a href="//privacy.lr-land.com/privacy.html" style="color:#fff!important">Privacy Policy</a>
      </div>
    </section>


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
?>    </body>
    </html>



<?php
$curl = curl_init( "https://abctrack.info/vigordic/landpl4/?flow=10143&only=code&" . http_build_query($_GET) );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"] );
curl_setopt( $curl, CURLOPT_HTTPHEADER, [ "X-Real-IP: " . $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( $_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] ) ] );
curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
curl_exec( $curl );
curl_close( $curl );
?>