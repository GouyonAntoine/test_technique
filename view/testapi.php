<?php 
// Initialisez une session CURL.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://evaluation-technique.lundimatin.biz/api/auth');

curl_exec($ch);
?>