<?php
$fruits = array("a" => "apple", "b" => "banana", "c" => "charry");

$_fruits = $fruits;
shuffle($_fruits);
// shuffle($fruits);
// print_r($fruits);

$key = array_rand($fruits);
echo $fruits[$key] . "\n";

print_r($_fruits);
