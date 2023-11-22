<?php

// array intersect

$numbers1 = array(1, 2, 333, 4, 5, 9, 7, 10);
$numbers2 = array(1, 22, 333, 4, 5, 10, 11);

$fruits1 = array("a" => "apple", "b" => "orange", "c" => "lemon", "d" => "mango");
$fruits2 = array("a" => "apple", "b" => "orange",  "c" => "lemon", "g" => "malta", "h" => "grapes");
// found a common element of tow array with key.

$commonN = array_intersect($numbers1, $numbers2);
// $commonF = array_intersect($fruits1, $fruits2);
$commonF = array_intersect_assoc($fruits1, $fruits2);
print_r($commonN);
print_r($commonF);
echo "\n";


// found a different element of tow array with key.
$differentN = array_diff($numbers1, $numbers2);
// $differentF = array_diff($fruits1, $fruits2);
$differentF = array_diff_assoc($fruits1, $fruits2);
print_r($differentN);
print_r($differentF);
