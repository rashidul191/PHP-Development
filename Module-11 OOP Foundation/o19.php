<?php

class DistrictCollection implements IteratorAggregate, Countable
{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district)
    {
        array_push($this->districts, $district);
    }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts); // do the return array iterator object 
    }

    function count()
    {
        return count($this->districts);
    }
}

$zillas = new DistrictCollection();
$zillas->add("rajshahi");
$zillas->add("Pabna");
$zillas->add("Bogura");

// print_r($zilla);

// foreach ($zillas as $zilla) {
//     echo $zilla;
//     echo PHP_EOL;
// }


echo count($zillas);
