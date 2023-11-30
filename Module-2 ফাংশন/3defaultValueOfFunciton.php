<?php

/**
 * Determines is the argument default value of function.
 */
function serve($food = "Tea", $numberOfItem = 1)
{
    echo "{$numberOfItem} cups of {$food} has / have been served";
}

$f = "Coffee";
$n = 12;
serve();
// serve($n);
