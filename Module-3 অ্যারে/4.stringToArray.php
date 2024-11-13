<?php

// in this tutorial we will learn php string to array and array to string.

$friends = "Abdur Rouf,Md Rakibul Islam, Rashidul";

// echo $friends;
// $stringToArray = explode(",", $friends);
$stringToArray = preg_split("/(, |,)/", $friends);
print_r($stringToArray);
