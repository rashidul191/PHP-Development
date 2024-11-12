<?php
class Students
{

    public $name;
    public $age;

    function __construct(string $name, int $age)
    {

        $this->name = $name;

        if (4 > $age) {
            throw new Exception("Too Young", 1001);
        } elseif (25 < $age) {
            throw new Exception("Too Old", 1002);
        }
        $this->age = $age;
    }
}

try {
    $result = new Students("Rashidul", 3);
    echo $result->name;
    echo PHP_EOL;
    echo $result->age;
} catch (Exception $th) {
    //throw $th;

    echo $th->getMessage();
    echo PHP_EOL;
    echo $th->getCode();
}
