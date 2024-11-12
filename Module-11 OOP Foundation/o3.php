<?php
class Human
{
    public $name;
    public $age;

    function __construct($personName, $personAge = 0)
    {
        // echo "This is constructor method";
        echo PHP_EOL;

        // echo $personName . "," . $personAge;
        $this->name = $personName;
        $this->age = $personAge;
        $this->getName();
    }


    function getName()
    {
        $myName = $this->name;
        $myAge = $this->age;
        if ($myAge) {

            echo "My name is {$myName} and I am {$myAge} Years old. \n";
        } else {
            echo "My name is {$myName} and I don't my age .\n";
        }
    }
}

new Human("Rashidul", 24);
new Human("Abdur Rouf", 28);
new Human("Rafiul");
