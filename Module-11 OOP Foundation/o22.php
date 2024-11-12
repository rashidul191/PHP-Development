<?php

class Planet{
    public $name;

    function __construct($name)
    {

        $this -> name = $name;
        
    }
}

$e = new Planet("Earth");
$e3 = $e;
$e2 = new Planet("Earth");

if($e === $e3){
    echo "Planet is similar";
}else{
    echo "not similar";
}