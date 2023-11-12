<?php

// Ternary Operator

$num = 10;
// normal condition operator like if else.
if ($num % 2 === 0) {
    echo "{$num} is event number.";
} else {
    echo "{$num} is odd number.";
}
echo "\n";

// ternary operator
echo $num % 2 === 0 ? "{$num} is event number" : "{$num} is odd number";
echo "\n";
// talk to extra ternary operator

$num = 10;
$result = ($num % 2 === 0) ? "A" : (($num === 11) ? "B" : "C");
echo $result;
