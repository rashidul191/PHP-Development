<?php

/**
 * Determines is the argument even or odd number.
 */
function isEven($n) // $n is here parameter
{
    if ($n % 2 === 0) {
        return true;
    }
    return false;
}

/**
 * Determines is the argument factorial number.
 */
function factorial($n)
{

    if (gettype($n) !== "integer") {

        return "invalid";
    }

    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}
