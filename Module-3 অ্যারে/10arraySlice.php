<?php

// array slice
$fruits = array("apple", "banana", "orange", "plum", "dates", "mango");

// print_r($fruits);

// $someFruits = array_slice($fruits, 2);
// $someFruits = array_slice($fruits, 2,2);
// $someFruits = array_slice($fruits, 2, 5);
// $someFruits = array_slice($fruits, 2, -1); // here print the to - last element.
$someFruits = array_slice($fruits,-4, -1, true);

// print_r($someFruits);

$random = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6, "g" => 7);
print_r($random);

// $randomData = array_slice($random, 4);
$randomData = array_slice($random, 2, 3, true);
print_r($randomData);
