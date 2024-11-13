<?php

// $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

// $numbers = array();
// for ($i = 2; $i < 22; $i += 3) {
//     array_push($numbers, $i);
// }
// print_r($numbers);


$numbers = range(0, 12, 2);

// print_r($numbers);

foreach (range(0, 12, 2) as $number) {
    if ($number > 0) {
        echo $number . "\n";
    }
}
