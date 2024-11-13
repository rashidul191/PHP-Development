<?php

$foods = [
    "vegetables" => explode(", ", "brinjal, brocolli, carrot, capsicam"),
    "fruits" => explode(", ", "orange, banana, apple"),
    "drinks" => explode(", ", "water, milk"),
];
// print_r($foods);
echo "\n";

$products = array(
    array(
        "name" => "IPhone 1",
        "price" => 123,
        "description" => "IPhone is a mobile device",
        "image" => "image-1",
        "images" => array(
            "image-2", "image-3", "image-4", "image-5"
        ),
        "model" => "CH1234A",
    ),
    array(
        "name" => "IPhone 2",
        "price" => 123,
        "description" => "IPhone is a mobile device",
        "image" => "image-1",
        "images" => array(
            "image-2", "image-3", "image-4", "image-5"
        ),
        "model" => "CH1234A",
    ),
    array(
        "name" => "IPhone 3",
        "price" => 123,
        "description" => "IPhone is a mobile device",
        "image" => "image-1",
        "images" => array(
            "image-2", "image-3", "image-4", "image-5"
        ),
        "model" => "CH1234A",
    ),
    array(
        "name" => "IPhone 4",
        "price" => 123,
        "description" => "IPhone is a mobile device",
        "image" => "image-1",
        "images" => array(
            "image-2", "image-3", "image-4", "image-5"
        ),
        "model" => "CH1234A",
    ),
);

// print_r($products);

foreach ($products as $product) :
    print_r($product["images"]);
    echo "\n";

endforeach;
