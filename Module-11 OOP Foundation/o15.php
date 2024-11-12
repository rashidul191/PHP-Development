<?php

class A
{
    // static $name; // access to all places
    // protected static $name; // access to own and extends class
    private static $name; // access to own class only   
    static function sayHi()
    {
        self::$name; // here static
        echo PHP_EOL;
        echo "Hi From A";
        echo PHP_EOL;
    }
}

class B extends A
{
    static function sayHi()
    {
        echo "Hi From B";
        echo PHP_EOL;
        parent::sayHi();
    }
}

B::sayHi(); // static


class D
{
    private $test;
    function __construct()
    {
        $this->test = "test";
    }

    function testMethod()
    {
        echo $this->test;
    }
}

$data = new D();

$data->testMethod();
