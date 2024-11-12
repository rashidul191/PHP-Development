<?php

$str = "I love my country. I also love a programming";

// $strLetter = str_split($str);
// $strLetterCount = array_count_values($strLetter);
// print_r($strLetterCount);

$wouldCount = preg_split("/ | ,/", $str);

print_r(count($wouldCount));
