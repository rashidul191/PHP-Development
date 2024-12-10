<?php

class FileWriter
{
    private $fileName;
    static $instance;
    function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    static function getInstance($fileName)
    {
        if (!isset(self::$instance[$fileName])) {

            self::$instance[$fileName] = new FileWriter($fileName);
        }

        return self::$instance[$fileName];
    }

    function writeData($data)
    {
        echo "Writing Data to {$this->fileName} \n";
    }
}

$si1 = FileWriter::getInstance("/test/abcd.txt");
$si2 = FileWriter::getInstance("/test/abc.txt");
$si3 = FileWriter::getInstance("/test/abcde.txt");
$si4 = FileWriter::getInstance("/test/abcde.txt");

$si1->writeData("some data");
$si2->writeData("some data");
$si3->writeData("some data");
$si4->writeData("some data");
