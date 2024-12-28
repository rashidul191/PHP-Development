<?php

// print_r(hash_hmac_algos());

$message = "This is a secret message";
$key = "MySecretPassword";

echo hash_hmac("sha512", $message, $key);
