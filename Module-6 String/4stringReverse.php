<?php

// $arr = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6);
// $arr = array(1, 2, 3, 4, 5, 6);
$str = "I am Rashidul Islam, I love my country";

echo $str[-2];
echo PHP_EOL;

$strToArr = explode(" ", $str);
$valueLength = count($strToArr);
$newArr = [];
for ($i = 0; $i < $valueLength; $i++) {
    array_push($newArr, strrev($strToArr[$i]));
}

$strWordRev = join(" ", $newArr);

echo $strWordRev;
