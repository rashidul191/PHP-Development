<?php

class Student
{
    private $test;
    private $age;
    private $class;

    function __construct($name = "", $age = "", $class = "")
    {
        $this->test = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop)
    {
        return strtoupper($this->$prop);
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }
}


$data = new Student();

$data->test = "rakib";

$data -> age = "25";

echo $data -> age;

echo PHP_EOL;

echo $data->test;




class B
{
    private $name;
    private $age;
    private $class;

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }
}
