<?php
// indexing array.
$students = [
    "rouf",
    "rashidul",
    "rakib",
    "rafiul"
];

print_r($students);
echo "\n \n";

// associative array.
$students = [
    "12" => "rouf",
    "13" => "rashidul",
    "14" => "rakib",
    "15" => "rafiul"
];
print_r($students);
echo "\n \n";

$foods = [
    "vegetables" => "brinjal, brocolli, carrot, capsicam",
    "fruits" => "orange, banana, apple",
    "drinks" => "water, milk",
];
// associative array push both example are same.
// $foods ["drinks"] = $foods["drinks"].", orange";
$foods ["drinks"] .=",  ";

print_r($foods);
echo "\n \n";
foreach ($foods as $key => $value) {
    echo "\n $key = $value\n";
}

//another way to find the key and value of the array.
$keys = array_keys($foods);
$values = array_values($foods);
print_r($keys);
echo "\n \n";
print_r($values);

for ($i = 0; $i < count($keys); $i++) {
    echo "\n $keys[$i]";
}
echo "\n \n";
for ($i = 0; $i < count($values); $i++) {
    echo "\n $values[$i]";
}
