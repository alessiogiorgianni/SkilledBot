<?php

// PARAMETRI DA MODIFICARE
//$WEBHOOK_URL = 'https://skilledbot.herokuapp.com/execute.php';
$WEBHOOK_URL = '';
$BOT_TOKEN = '249406438:AAEdwbSfHhyk5lZ5DsxexMVxJ8PdNhChJvg';

// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
$method = 'setWebhook';
$parameters = array('url' => $WEBHOOK_URL);
$url = $API_URL . $method. '?' . http_build_query($parameters);
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($handle, CURLOPT_TIMEOUT, 60);
$result = curl_exec($handle);
print_r($result);