<?php
$str = "I Am Rashidul Islam,I am web developer";

$offset = strpos($str, "I");
// $offset = stripos($str, "am");
// $offset = strrpos($str, "am");
// if ($offset !== false) {
//     echo "Word was found";
//     echo PHP_EOL;
// } else {
//     echo "Word was not found";
//     echo PHP_EOL;
// }

$offset = str_contains($str, "test");
echo $offset;
