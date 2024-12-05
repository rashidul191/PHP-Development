<?php

echo ini_get("error_log");

$headers = "From: text@example.com\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// error_log("This is an error message", 0);
// error_log("This is an error message", 1, "rashidul.191cse.gub@gmail.com");

$date = date("Y:m:d H:j:s");
error_log("[{$date}] This is an error message \n", 3, "error_log.txt");
