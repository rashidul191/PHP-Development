<?php

$name = 0;

if (isset($name)) {
    echo "Name is set";
} else {
    echo "Name is not set";
}


echo "\n";

if (empty($name)) {
    echo "Name is empty";
} else {
    echo "Name is not empty";
}

echo "\n";

if (isset($name) && (is_numeric($name) ||  !empty($name))) {

    echo "Name is set and not empty";
} else {

    echo "Name is not set and empty";
}
