<?php 
const TOKEN = '878912921:AAEcE-PdGB28uUcuC5ySdV7E0d4ksob1A2g';
const URL = 'https://api.telegram.org/bot' . TOKEN . '/';

function sendRequest($method, $param = []) {
    if (!empty($param))
        $url = URL . $method . '?' . http_build_query($param);
    else
        $url = URL . $method;
    
    return json_decode(file_get_contents($url), true); //Преобразуем в массив
}

if (!empty($lastupdate))
    $updates = sendRequest('getUpdates',['offset' => $lastupdate+1]);
else
    $updates = sendRequest('getUpdates');

if ($updates['ok']) {
    foreach ($updates['result'] as $update) {
        $chatId = $update['message']['chat']['id'];
        $text = $update['message']['text'];
        sendRequest('sendMessage',[
            'chat_id' => $chatId,
            'text' =>  'Привет ' . $update['message']['from']['first_name'] . ' ' . $update['message']['from']['last_name']
        ]);
        $lastupdate = $update['update_id'];
    }
}
?>