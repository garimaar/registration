<?php
$ch = curl_init();
$curlConfig = array(
    CURLOPT_URL            => "https://jsonplaceholder.typicode.com/userspost=1",
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS     => array(
        "id" => " 1",
        "name" => "Leanne Graham",
        "username" => "Bret",
        "email" => "Sincere@april.biz",
    )
);
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
curl_close($ch);
