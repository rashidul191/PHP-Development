<?php
$students = array(

    "fname" => "Rashidul",
    "lname" => "Islam",
    "age" => 25,
    "class" => 6,
    "section" => "A"
);


print_r($students);

echo $students["fname"] . " " . $students["lname"] . "\n";

printf("%s %s", $students["fname"], $students["lname"]);

echo "\n";
// echo join(", ", $students);
$serialize =  serialize($students);
$newStudents = unserialize($serialize);

print_r($newStudents);

// json

$jsonData = json_encode($students);
echo $jsonData. "\n";

$newStudents2 = json_decode($jsonData, true);
print_r($newStudents2);
