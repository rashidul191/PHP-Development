<?php

// in this tutorial we will learn php string to array and array to string.
$vegetable = "brinjal, brocolli, carrot, capsicam";
$stringToArray = explode(", ", $vegetable);

print_r($stringToArray);


$friends = ["rouf", "rakib", "rafiul"];

$arrayToString = join(", ", $friends);

echo "\n" . $arrayToString;
