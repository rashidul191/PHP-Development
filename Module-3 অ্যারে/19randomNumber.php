<?php

// $random = rand(2,10);
$random = mt_rand(1, 6);

// echo $random;

$numbers = range(1, 5, 1);

shuffle($numbers);

foreach ($numbers as $number):
echo $number. "\n";
endforeach;