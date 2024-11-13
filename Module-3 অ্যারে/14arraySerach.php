<?php
$numbers = array(1, 2, 3, 4, 5, 6, 22, 7, 8, 9, 10, 11);
$products = array("name" => "product-1", "images" => "img-1", "price" => 55, "quantity" => 10, "description" => "product description", "short_description" => "product description");


// found a array element
if (in_array(22, $numbers)) {
    // echo "Found your value.";
}

$numberLength = count($numbers);
for ($i = 0; $i < $numberLength; $i++) {
    $element =  $numbers[$i];
    if (2 === $element) {
        // echo "found a value: $element";
    }
}
echo "\n";
// found a array index
$offset = array_search(2, $numbers);
// echo $offset . "\n";

// found a array key value.
if (key_exists("lname", $products)) {
    echo "Found your product value.";
} else {
    echo "Not Found your product value.";
}

foreach ($products as $key => $product) {
    // echo $key. "\n";
    if ("name" === $key) {
        echo $product . " found";
    }
}
