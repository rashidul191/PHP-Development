<?php

/**
 * Determines is the argument function rest parameter.
 */
function sum(int ...$numbers)
{

    $result = 1;
    for ($i = 0; $i < count($numbers); $i++) {

        $result += $numbers[$i];
    }
    return $result;
}

echo sum(1, 2, 3, 4, 5, 5, 6, 6, 7, 7, 3);

echo "\n";
printf("%s", sum(1, 2, 3, 4, 5, 5));
