<?php


$url = "https://jsonplaceholder.typicode.com/users";


$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);
$data = json_decode($result, true);
for ($i = 0; $i < 5; $i++) {
    echo ("id->" . $data[$i]['id']);
    echo ("<br>");
    echo ("name->" . $data[$i]['name']);
    echo ("<br>");
    echo ("username->" . $data[$i]['username']);
    echo ("<br>");
    echo ("email->" . $data[$i]['email']);
    echo ("<br>");
}
