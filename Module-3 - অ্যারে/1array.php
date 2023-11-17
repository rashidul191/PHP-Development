<?php
// array of php

// both array defined is same.
// $numbers = array(1,2,3,4,5);
$numbers = [1, 2, 3, 4, 5];

// array length count();

echo count($numbers) . "\n";

// specific index element  find from array
echo $numbers[2] . "\n \n";

$arrayLength = count($numbers);
for ($i = 0; $i < $arrayLength; $i++) {

    echo $numbers[$i] . "\n";
}

for ($i = $arrayLength-1; $i >= 0; $i--) {
    echo $numbers[$i] . "\n";
}
