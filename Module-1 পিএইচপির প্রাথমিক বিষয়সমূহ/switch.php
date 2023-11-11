<?php

$num = 14;

switch ($num % 2) {
    case 0:
        echo "{$num} is event number \n";
        break;
    case 11:
        echo "{$num} is test \n";
        break;
    default:
        echo "{$num} is odd number \n";
}



$color = "red";
switch ($color) {

    case "green":
        echo "{$color} is our favorite color";
        break;
    case "yellow":
        echo "{$color} is our favorite color";
        break;
    case "blue":
        echo "{$color} is our favorite color";
        break;
    case "red":

        echo "{$color} is our favorite color";
        break;
    default:
        echo "{$color} is our favorite color";
}

echo "\n";

$n = -11;
$r = $n % 2;

switch (true) {
    case ($r === 0 && $n > 0):
        echo "{$n} is positive event number";
        break;
    case ($r === 1 && $n > 0):
        echo "{$n} is positive odd number";
        break;
    case ($r === 0 && $n < 0):
        echo "{$n} is negative event number";
        break;
    case ($r === -1 && $n < 0):
        echo "{$n} is negative odd number";
        break;
}
