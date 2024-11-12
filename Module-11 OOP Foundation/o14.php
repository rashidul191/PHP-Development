<?php

class A
{
    static function sayHi()
    {
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

B::sayHi();
