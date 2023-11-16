<?php


$number = 10; // global scope

function doSomeThing()
{
    global $number;
    if ($number % 2 === 0) {
        echo "{$number} is even number";
    } else {
        echo "{$number} is odd number";
    }
}
doSomeThing();

function doSomeThingName()
{
    global $name;
    $name = "rashidul"; // local variable
    // echo "\nMy name is {$name}";
}

doSomeThingName();
echo "\nMy name is {$name} \n";



$test = $i ?? 1;

echo $test;
