<?php
$url = 'https://jsonplaceholder.typicode.com/posts';

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);
print_r($data);
$error = curl_errno($ch);
if($error){
    echo $error;
}
