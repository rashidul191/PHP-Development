<?php

function serve($food = "Tea", $numberOfItem = 1)
{
    echo "{$numberOfItem} cups of {$food} has / have been served";
}

$f = "Coffee";
// $n = 12;
serve($f, $n);
// serve($n);
