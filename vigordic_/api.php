<?php
if (empty( $_POST )) die("Bad request");
$data = $_POST;
$data["ip"] = $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( $_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] );
$data["ua"] = $_SERVER["HTTP_USER_AGENT"];
if (isset( $data["phonecc"] )) $data["phone"] = $data["phonecc"].$data["phone"];
$data = http_build_query( $data );
$curl = curl_init( "https://my.profitpay.one/api/wm/push.json?id=6554-3025231b4e5b0a2a2ba9a50d2b968013&offer=199&flow=10143&site=1199" );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_TIMEOUT, 30 );
curl_setopt( $curl, CURLOPT_POST, 1 );
curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );
curl_setopt( $curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"] );
curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
$result = json_decode( curl_exec( $curl ), true );
curl_close( $curl );
if (count( $_GET )) $result = array_merge( $result, $_GET );
header( "Location: success.php?" . http_build_query($result) );
die();
?>