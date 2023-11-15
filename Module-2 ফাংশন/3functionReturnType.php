<?php

/**
 * Determines is the argument return type of function.
 */
function sum(int $x, int $y, int $z): int
{
    return $x + $y + $z;
}

echo sum(4, 5, 6);


