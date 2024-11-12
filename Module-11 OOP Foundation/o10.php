<?php
class OurClass
{
    final function doSomething()
    {
        echo "Doing Something";
    }
}

class ChildClass extends OurClass
{
    // function doSomething()
    // {
    //     echo "hi";
    // }
}

$data = new ChildClass();

$data->doSomething();
