<?php

//Recupère le token de l'api
function auth() {

$url = "https://evaluation-technique.lundimatin.biz/api/auth";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"username":"test_api","password":"api123456","code_application":"webservice_externe","code_version":"1"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);



$resp = curl_exec($curl);
curl_close($curl);

echo $resp;

//token = 6182a0ab5c445976811824

}


//TEST

$serverURL = "evaluation-technique.lundimatin.biz/api";
$token = auth();
if ($token === null)
   exit;
?>





