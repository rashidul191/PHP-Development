<?php

$url = 'http://localhost:3030/hello.php';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($ch, CURLOPT_POSTFIELDS, "key=value");
curl_setopt($ch, CURLOPT_POSTFIELDS, "secret=noodles");

curl_exec($ch);
