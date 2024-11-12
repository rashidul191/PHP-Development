<?php

abstract class ShapeRR
{
    abstract function getArea();

    public function sayHi()
    {
        echo "hi";
    }
}

class Rashidul extends ShapeRR
{
    public function getArea()
    {
        echo "Get Area function";
    }
}

$data = new Rashidul();

$data->getArea();
