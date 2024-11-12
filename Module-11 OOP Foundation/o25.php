<?php
// Topic Name is: Method Overloading of PHP.
// Magic Methods: __call($name, $arguments) & __callStatic($name, $arguments); Here $arguments received array.

// Magic Method: __call();
class MethodOverLoading
{
    public function __call($name, $arguments) {

        if("sum" == $name){
            return $arguments;
        }else{
            return "false";
        }
    }
}

$result = new MethodOverLoading();
print_r($result -> sum(1,2));
echo PHP_EOL;
print_r($result -> any(1,2));
echo PHP_EOL;

// Magic Method = __callStatic();
class MethodOverStatic{
    static function __callStatic($name, $arguments)
    {
        if("sum" == $name){
            return $arguments;
        }else{
            return "false";
        }
    }
}

print_r(MethodOverStatic::sum(4,5));
echo PHP_EOL;
print_r(MethodOverStatic::any(4,5));
echo PHP_EOL;