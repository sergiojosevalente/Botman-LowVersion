<?php
$botToken = '6031252865:AAEfnpiK0vk5nkqbXIPQn-C5apTtycxqxEU';
$chatId = '-844835074';

$filePath = './public/getlastattached.txt';

$file = fopen($filePath, 'r');
$content = fread($file, filesize($filePath));
fclose($file);

$botUrl = "https://api.telegram.org/bot$botToken/";
$fileUrl = $botUrl . "sendDocument?chat_id=$chatId";
$postFields = array(
    'document' => new CURLFile($filePath),
    'caption' => 'Text File BTS Last Attached'
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type:multipart/form-data"
));
curl_setopt($ch, CURLOPT_URL, $fileUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
