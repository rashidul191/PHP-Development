<?php

// timing attack

$password = "secret password";

$hash = hash("sha1", $password);

//echo $hash;

$usePass = "password";
$userPassHash = hash("sha1", $usePass);

if (hash_equals($hash, $userPassHash)) {
    echo "Password Match";
} else {
    echo "password not match";
}
