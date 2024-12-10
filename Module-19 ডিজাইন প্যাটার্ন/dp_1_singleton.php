<?php

class SomeClass
{
    static $instance;
    function __construct()
    {
        echo "New Class Call Here \n";
    }

    static function getInstance()
    {
        if (!self::$instance) {

            self::$instance = new SomeClass();
        } else {
            echo "Class was called \n";
        }
    }
}

$si1 = SomeClass::getInstance();
$si2 = SomeClass::getInstance();
$si3 = SomeClass::getInstance();
$si4 = SomeClass::getInstance();
