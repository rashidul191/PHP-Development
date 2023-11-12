<?php

// for loop
for ($i = 10; $i > 0; $i--) {

    for ($j = $i; $j > 0; $j--) {
        echo "*";
        // echo "\n";
        # code...
    }
    echo "\n";
}

// while loop

$i = 0;
while ($i < 10) {

    echo "$i";
    $i++;
    echo "\n";
}

// do while loop

$i = 0;
do {

    echo $i;
    $i++;
    echo "\n";
} while ($i < 10);


// Go to loop of php
echo "go to \n";
$i = 0;
a:
$i++;
echo $i . "\n";
if ($i < 10) goto a;
