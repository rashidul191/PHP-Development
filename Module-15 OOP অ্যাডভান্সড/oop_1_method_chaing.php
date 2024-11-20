<?php

// Method Chaining

class StringUtility
{
    private $string;
    private $search;

    function __construct($string)
    {
        $this->string = $string;
    }

    function searchString($search_string)
    {
        $this->search = $search_string;
        $this->search = "";
        return $this;
    }

    function replaceString($replace_string)
    {

        if (!isset($this->search)) {
            throw new Exception("Not search found");
        }
        $this->string =  str_replace($this->search, $replace_string, $this->string);
        return $this;
    }

    function upperCase()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }
    function lowerCase()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    function showOutput()
    {
        echo $this->string;
    }
}

$data = new StringUtility("Hello World");

// Method Chaining
$data->searchString("World")
->replaceString("Bangladesh")
->upperCase()
->showOutput();
