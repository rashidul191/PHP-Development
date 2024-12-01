<?php


function customErrorHandler($severity, $msg, $file, $line)
{

    echo "[{$severity}]: {$msg} in {$file} on line number of {$line}";
}

set_error_handler("customErrorHandler");

// trigger_error("This is an error");
// substr([1234], 4);

echo $undefinedVariable;
// echo 10 / 0;

restore_error_handler();
