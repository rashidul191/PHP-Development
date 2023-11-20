<?php

$rashidulFriends = array("samrat", "farhan", "noman");
$rakibFriends = array("Rahim", "Karim", "Salam");

// array merge
$mergeArrayFriends = array_merge($rakibFriends, $rashidulFriends);
// $mergeArrayFriends = $rakibFriends + $rashidulFriends;



print_r($mergeArrayFriends);
