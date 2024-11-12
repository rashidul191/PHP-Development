<?php

class ShapeTT
{
}

class Shapes
{
    private $shapes;

    public function __construct()
    {
        $this->shapes = array();
    }
    function addShape(ShapeTT $shape)
    {
        array_push($this->shapes,  $shape);
    }

    function totalShapes()
    {
        return count($this->shapes);
    }
}

class TestTT1 extends ShapeTT
{
}

class TestTT2 extends ShapeTT
{
}

class Student
{
}

$data = new Shapes();

$data->addShape(new TestTT1());
$data->addShape(new TestTT2());
// $data->addShape(new Student());

echo $data->totalShapes();
