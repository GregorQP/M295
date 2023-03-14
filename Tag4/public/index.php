<?php

$ip = $_SERVER['REMOTE-ADDR'];
echo $ip;

$apiURL = "https://ip-api.io/json/" . $ip;
$ch = curl_init($apiURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$apiResponse = curl_exec($ch);

echo '<pre>';
print_r(json_decode($apiResponse));
echo '</pre>';