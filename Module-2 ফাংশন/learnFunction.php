<?php

include_once "functions.php"; // include a functions.php file here.
// condition
$x = 123;
if (isEven($x)) { // $x is here argument
    echo "{$x} is and even number";
} else {
    echo "{$x} is and odd number";
}

$x = "fff";
echo "\n Factorial of {$x} is " . factorial($x);
 