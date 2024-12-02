<?php

function x($a)
{
    y($a);
}

function y($b)
{
    z($b * 2);
}

function z($c)
{

    if ($c < 20) {
        trigger_error("Too Small {$c} \n");
    } else {
        echo "{$c} is ok \n";
    }

    // debug_print_backtrace();
    debug_print_backtrace(0, 2);
    // print_r(debug_backtrace()); // output: show array
}

function w($d, $e)
{
    x($d + $e);
}
// z(99);
w(5, 4);
