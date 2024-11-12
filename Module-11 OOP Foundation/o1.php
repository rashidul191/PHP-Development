<?php

// class
class HumanClassT
{
    public $name;
    function sayHi($num)
    {
        $this->getName($num);
    }

    function getName($num)
    {
        echo "Get Name is : " . $this->name. " " . $num;
    }
}
$hi = new HumanClassT();

$hi->name = "rashidul";

$hi->sayHi(12);
