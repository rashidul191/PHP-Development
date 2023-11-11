<?php


// variable types

/**
 * Integer Int
 * Double / Float
 * Boolean
 * Null
 * String
 * Array
 * Object
 * Resource
 */


/* 
// Arithmetic Operator
   +, -, *, /, %,
// Assignment Operator
  ++, --, ==, +=, -=, *=, /=, %=, 
*/


$num = 5 + 1; // here + is operator 5 and 1 is operant

echo "$num \n";
$n = 5;
$m = $n++;
echo $m, "\n", $n;
echo "\n";

/* 
// $m = $n++;
$m = $n;
$n = $n + 1;
*/

$x = 5;
$y = ++$x;
echo $y, "\n", $x;

/* 
// $y = ++$x;
$y = $x + 1;
$x = $x + 1;
*/


echo "\n";

printf("%05d", 33);
echo "\n";



/* 

// Logical Operators

>, <, >=, <=, ==, !=, || &&

*/


// example of logical Operators & conditionals

$num = 10;
if($num % 2 == 0){
    echo "{$num} is event number.";
}else{
    echo "{$num} is not event number.";
}

$math = 79;

if($math >= 80 ){
    echo "He is get a A+ on the exam.";
}else if($math >= 79 && $math >= 40){
    echo "He is get a only pass on the exam";
}else{
    echo "He is fall";
}