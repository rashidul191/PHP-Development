<?php

$person = [
    "name" => "Rashidul",
    "id" => 123,
    "age" => 25,
    "sex" => "F",
];

function processMaternityLeave($person)
{

    if ($person["sex"] == "M") {
        echo "Process";
    } else {
        // throw new Exception("Gender Mismatch");

        throw new GenderMismatchException($person);
    }
}

class GenderMismatchException extends Exception
{

    private $person;
    function __construct($person)
    {
        $this->person = $person;
        parent::__construct("Gender Mismatch");
    }

    function getDetailsMessage()
    {
        echo "Gender Mismatch for Person with ID {$this->person["id"]}";
    }
}
try {
    processMaternityLeave($person);
} catch (GenderMismatchException $e) {
    echo $e->getMessage();
    echo PHP_EOL;
    echo $e->getDetailsMessage();
} catch (Exception $e) {
    // echo $e->getMessage();
    echo "Other Exception error";
}
