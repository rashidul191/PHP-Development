<?php

$foods = [
    "vegetables" => explode(", ", "brinjal, brocolli, carrot, capsicam"),
    "fruits" => explode(", ", "orange, banana, apple"),
    "drinks" => explode(", ", "water, milk"),
];
print_r($foods);
echo "\n";
array_push($foods["drinks"], "orange juice");
print_r($foods);


echo $foods["vegetables"][2] . "\n";


$sample = [
    "test" => [
        "test-again" => [
            "a",
            "b",
            "c",
            "d",
        ]
    ]
];

print_r($sample);

echo "\n";

$sample["test"]["test-again"][2] = "CCCC";
print_r($sample);
