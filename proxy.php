<?php
// Включение CORS-заголовков
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$email = urlencode("boby536464@proton.me");
$pass = urlencode("skfmm89u787t7&%^FR%^%^");
$mdn = urlencode('14156576802');

// URL API, который вы хотите вызвать
$apiUrl = "https://www.unlimitedportal.com/api_command.php?cmd=read_sms&user=" . $email . "&pass=" . $pass . "&service=Telegram&mdn=" . $mdn;

// Выполнение запроса к API
$response = file_get_contents($apiUrl);

// Пересылка ответа от API клиенту
echo $response;
// json_encode(['api'=> $apiUrl])
?>