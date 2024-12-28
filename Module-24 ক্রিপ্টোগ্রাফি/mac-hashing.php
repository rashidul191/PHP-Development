<?php


// mac = Message Authentication Code

$secretPassword = "wow";

$message = "This is my message";

// echo sha1($message);

$hash = mhash(MHASH_SHA1, $message, $secretPassword);
echo bin2hex($hash);
