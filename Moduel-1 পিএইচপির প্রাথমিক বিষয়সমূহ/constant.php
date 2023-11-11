<?php

// constant
define('Name', "rashidul");

echo "Name: ". Name;
echo "\n";
echo constant("Name");


// Valid constant names

define("FOO",     "something");

define("FOO2",    "something else");

define("FOO_BAR", "something more");

// Invalid constant names

define("2FOO",    "something");

// This is valid, but should be avoided:

// PHP may one day provide a magical constant

// that will break your script

define("__FOO__", "something");


// single line comments

/*

Multiple lines comments

*/

# spacial line comments