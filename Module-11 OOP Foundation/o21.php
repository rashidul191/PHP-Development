<?php

class Color
{
    public $color;
    public $data;

    function __construct($color, $data)
    {
        $this->data = $data;
        $this->color = $color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function __toString()
    {
        return $this->color; // only for echo, that object to string convert
    }
}


$data = new Color("red", "some Data");

echo $data;


print_r($data);
