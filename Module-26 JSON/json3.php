<?php

class Person
{
    public $firstName;
    public $lastName;
    private $private; // get a json data
    public $private2;
    static $staticData; // get a json data
}
$p = new Person();
$p->firstName = "john";
$p->lastName = "Doe";

echo json_encode($p);
