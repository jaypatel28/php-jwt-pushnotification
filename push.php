<?php
require_once './vendor/autoload.php';
use Jose\Factory\JWKFactory;
use Jose\Factory\JWSFactory;
$key_file = 'apns.p8';
$secret = null; // If the key is encrypted, the secret must be set in this variable
$private_key = JWKFactory::createFromKeyFile($key_file, $secret, [
    'kid' => 'KEY_ID', // The Key ID obtained from your developer account
    'alg' => 'ES256',      // Not mandatory but recommended
    'use' => 'sig',        // Not mandatory but recommended
]);
$payload = [
    'iss' => 'YOUR_TEAM_ID',  //Team ID obtained from your developer account
    'iat' => time(),
];
$header = [
    'alg' => 'ES256',
    'kid' => $private_key->get('kid'),
];
var_dump($private_key);

$jws = JWSFactory::createJWSToCompactJSON(
    $payload,
    $private_key,
    $header
);

var_dump($jws);


function sendHTTP2Push($http2ch, $http2_server, $app_bundle_id, $message, $token, $jws) {
    // url (endpoint)
    $url = "{$http2_server}/3/device/{$token}";
    // headers
    $headers = array(
        "apns-topic: {$app_bundle_id}",
        'Authorization: bearer ' . $jws
    );
    // other curl options
    curl_setopt_array($http2ch, array(
        CURLOPT_URL => $url,
        CURLOPT_PORT => 443,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POST => TRUE,
        CURLOPT_POSTFIELDS => $message,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HEADER => 1
    ));
    // go...
    $result = curl_exec($http2ch);
    if ($result === FALSE) {
        throw new Exception("Curl failed: " .  curl_error($http2ch));
    }
    print_r($result);
    // get response
    $status = curl_getinfo($http2ch);
    var_dump($result);
    var_dump($status);
    return $status;
}
// this is only needed with php prior to 5.5.24
if (!defined('CURL_HTTP_VERSION_2_0')) {
    define('CURL_HTTP_VERSION_2_0', 3);
}
// open connection
$http2ch = curl_init();
curl_setopt($http2ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
// send push
$message = '{"aps":{"alert":"Hello World! JWT Based Push Notification using PHP.","sound":"default"}}';
$token = 'DEVICE_TOKEN_HERE';
$http2_server = 'https://api.development.push.apple.com'; // or 'api.push.apple.com' if production
$app_bundle_id = 'APP_ID';
sendHTTP2Push($http2ch, $http2_server, $app_bundle_id, $message, $token, $jws);
// close connection
curl_close($http2ch);

