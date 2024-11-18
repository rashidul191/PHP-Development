<?php
// glob() function

// $files = glob("./*");
// $files = glob("./*", GLOB_ONLYDIR); // Show Only Directory Name
// $files = glob("./f*");
$files = glob("./source/*/*");

print_r($files);
