<?php

$pass = "secret password";

$passHash = password_hash($pass, PASSWORD_BCRYPT);

// echo $passHash;

$userPass = "secret password";

if (password_verify($userPass, $passHash)) {
    echo "password is match";
} else {
    echo "password is not match";
}
