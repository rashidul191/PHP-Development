<?php
$fruits = array("apple", "banana", "orange", "plum", "dates", "mango");


$newFruits = array("jackfruit", "tamarind", "pineapple");
// $someFruits = array_splice($fruits, 2, 3);
// $someFruits = array_splice($fruits, 2, -3);
$someFruits = array_splice($fruits, 2, -3, $newFruits);
print_r($someFruits);
print_r($fruits);
