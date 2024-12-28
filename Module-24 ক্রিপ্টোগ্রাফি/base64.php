<?php

$test = "Quick Brown fox jumps over the lazy dog";

$encoded  = base64_encode($test);
echo $encoded;
echo PHP_EOL;

$decoded = base64_decode($encoded);

echo $decoded;