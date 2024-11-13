<?php

$students = array("rashidul", "rakib", "rouf", "rafiul");

var_dump($students);


echo "\n\n\n";
function arrayPop($students)
{

    $newArray = array();
    $studentsLength = count($students);

    for ($i = 0; $i < $studentsLength - 1; $i++) {

        // $newArray[] =  $students[$i];
        array_push($newArray, $students[$i]);
    }
    return $newArray;
}

$arrayPopLastElement = arrayPop($students);
var_dump($arrayPopLastElement);

echo "\n\n\n";

array_pop($students);
var_dump($students);

echo "\n\n\n";
$numbers = array(1, 2, 3, 4, 5);
// var_dump($numbers). "\n";
echo "\nArray: \n";
$numbersLength = count($numbers);
for ($i = 0; $i < $numbersLength; $i++) {
    echo $numbers[$i] . "\n";
}

// Array Shift that remove first element of array.
echo "\nArray Shift: \n";
array_shift($numbers);
$numbersLength = count($numbers);
for ($i = 0; $i < $numbersLength; $i++) {
    echo $numbers[$i] . "\n";
}

// Array POP that remove last element of array.
echo "\nArray pop: \n";
array_pop($numbers);
$numbersLength = count($numbers);
for ($i = 0; $i < $numbersLength; $i++) {
    echo $numbers[$i] . "\n";
}


// Array Unshift that add new element first position of array.
echo "\nArray Unshift: \n";
array_unshift($numbers, 99);
$numbersLength = count($numbers);
for ($i = 0; $i < $numbersLength; $i++) {
    echo $numbers[$i] . "\n";
}


// Array Push that add new element last position of array.
echo "\nArray Push: \n";
array_push($numbers, 10);
$numbersLength = count($numbers);
for ($i = 0; $i < $numbersLength; $i++) {
    echo $numbers[$i] . "\n";
}

