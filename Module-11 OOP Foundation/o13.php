<?php

class MathCalculator
{
    private $number;
    static $num;
    static function fibonacci($n)
    {
        self::doSomeThing();
        echo self::$num = 22;
        echo PHP_EOL;
        echo "Fibonacci series up to {$n}";
        echo PHP_EOL;
    }

    static function doSomeThing()
    {
        echo "Do Some Thing";
        echo PHP_EOL;
    }
    function factorial($n)
    {

        self::doSomeThing();
        $this->doSomeThing();
        $this->number = 12;
        echo PHP_EOL;
        echo "Calculating factorial of {$n}";
        echo PHP_EOL;
    }
}

$data = new MathCalculator();
$data->factorial(5);

MathCalculator::fibonacci(8);
