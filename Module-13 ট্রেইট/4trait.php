<?php

// trait abstract and static method and property

trait MyTrait
{
    static $number;
    static function sum($num1, $num2){
        echo $num1 + $num2;
    }

    abstract function sayHi();
}

class MyClassA
{
    use MyTrait;

    function sayHi()
    {
        echo "hi";
    }
}
//  MyClassA:: sum(5, 4);

$data = new MyClassA();

$data -> sayHi();