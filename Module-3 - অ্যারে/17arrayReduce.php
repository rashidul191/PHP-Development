<?php
// array_reduce of php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = 0;
function sum($num1, $num2)
{
  $sum = $num1 + $num2;
  return $sum;

}

$arraySum = array_reduce($numbers, 'sum', 0);
print_r($arraySum);
