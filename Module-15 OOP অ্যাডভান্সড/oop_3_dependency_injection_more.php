<?php
// Dependency Injection More Example

interface BaseStorage
{
    function setFileName($fn);
    function writeData($data);
    // function appendData($data);
    function setMode($mode);
}
class Storage implements BaseStorage
{
    private $fn;
    private $mode;  
    function __construct($fn)
    {
        $this->setFileName($fn);
    }

    function setFileName($fn)
    {
        $this->fn = $fn;
    }

    function writeData($data)
    {
        file_put_contents($this->fn, $data, $this->mode);
    }

    // function appendData($data)
    // {
    //     file_put_contents($this->fn, $data, FILE_APPEND);
    // }

    function setMode($mode)
    {
        $this->mode = $mode;
    }
}

// class DataManage
// {
//     function saveData($fileName, $data)
//     {
//         $storage = new Storage($fileName);
//         // $storage->writeData($data);
//         $storage->appendData($data);
//     }
// }

class DataManage
{
    function saveData(BaseStorage $storageObject, $data)
    {
        $storageObject->writeData($data);
        // $storage->writeData($data);
        // $storage->appendData($data);
    }
}

$st = new Storage("simple.txt");
$st->setMode(FILE_APPEND);
$result = new DataManage();

// $result -> saveData("simple.txt", "Welcome To");
$result->saveData($st, " Welcome To Dependency Injection");
