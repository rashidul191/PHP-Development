<?php

$salt = "#R@shidu1"; // give a developer secret kew words.

$password = "Secret Password";

$hash = md5($password . $salt);

echo $hash . "\n";
$userPassword = "Secret Password";
if (md5($userPassword . $salt) == '20d559abebd5833e0fe7212f05e651eb') {
    echo "password is correct";
} else {
    echo "password is incorrect";
}
