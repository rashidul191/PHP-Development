<?php
$numbers = array(1, 2, 23, 4, 5);
function square($n)
{
    return $n;
    // echo $n . "x" . $n . "=" . $n * $n . "\n";
    //    for($i=0; $i<count($n); $i++){
    //     $element = $n[$i];
    //         echo $element . "x" . $element . "=" . $element * $element . "\n";
    //    }
}

$newArray = array_walk($numbers, "square");
// print_r($newArray);
// square($numbers);

function cube($n)
{
    return $n * $n * $n;
}

$newArray = array_map("cube", $numbers);
// print_r($newArray);


function isEven($num)
{
    return 2 % $num === 0;
}

$newArray = array_filter($numbers, "isEven");
// print_r($newArray);

$names = array("rouf", "abir", "almas", "rashidul", "rakib");

function rFilterOfName($names){
  return $names[0]=== "r";
}

$newArray = array_filter($names, "rFilterOfName");
print_r($newArray);