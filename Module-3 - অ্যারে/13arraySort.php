<?php
// array sort


// small to big
$rashidulFriends = array("samrat", "farhan", "noman", "abir", "hasan");
print_r($rashidulFriends);
sort($rashidulFriends);
print_r($rashidulFriends);

$names = array("s" => "samrat", "f" => "farhan", "n" => "noman", "abir", "hasan");
print_r($names);
asort($names);
print_r($names);


// big to small
$numbers = array(1, 44, 55, 2, 3, 7);
arsort($numbers);
print_r($numbers);

foreach ($numbers as $key => $number) {

    // echo "\n" . $key;
    // echo "\n" . $number;
}
