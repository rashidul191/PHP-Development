<?php

$numbers = array(1, 2, 3, 4, 5, 6, 22, 7, 8, 9, 10, 11);
$product = array("name" => "product-1", "images" => "img-1", "price" => 55, "quantity" => 10, "description" => "product description", "short_description" => "product description");

// found a array element
if (in_array(22, $numbers)) {

    echo "Found your value.";
}

echo "\n";
// found a array index
$offset = array_search(2, $numbers);
echo $offset . "\n";

// found a array key value.
if (key_exists("lname", $product)) {
    echo "Found your product value.";
}
