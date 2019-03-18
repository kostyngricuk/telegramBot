<?php 
const TOKEN = '878912921:AAEcE-PdGB28uUcuC5ySdV7E0d4ksob1A2g';
const URL = 'https://api.telegram.org/bot' . TOKEN . '/';

function sendRequest($method, $param = []) {
    if (!empty($param))
        $url = URL . $method . '?' . http_build_query($param);
    else
        $url = URL . $method;
    
    return json_decode(file_get_contents($url), true);
}

$update = json_decode(file_get_contents('php://input'), true);

$chatId = $update['message']['chat']['id'];
$text = $update['message']['text'];

sendRequest('sendMessage',[
    'chat_id' => $chatId,
    'text' => $text
]);

?>