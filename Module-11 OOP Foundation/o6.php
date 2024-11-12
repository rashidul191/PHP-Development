<?php

class Animal
{
    protected $name;

    public function __construct($personName)
    {
        $this->name = $personName;
    }
    public function eat()
    {
        echo "{$this->name} is eating";
    }

    public function run()
    {
        echo "{$this->name} is running";
    }
    public function sleep()
    {
        echo "{$this->name} is sleeping";
    }
}

class HumanClass extends Animal
{
    public function eat()
    {
        echo "{$this->name} is eating";
    }
}

class Cat extends HumanClass
{
    public function eat()
    {
        echo "{$this->name} is eating";
    }
}

$human = new HumanClass("");
$human->eat();

$cat = new Cat("Tom");

$cat->eat();
