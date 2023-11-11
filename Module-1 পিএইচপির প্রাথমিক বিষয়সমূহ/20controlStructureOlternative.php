<?php



$num = 10;

if ($num % 2 === 0) {
    echo "event number";
} else {
    echo "odd number";
}

echo "\n";


// php most of case use in this control structure

if ($num % 2 === 0) :
    echo "event number \n";
    echo "rashidul test purpose text";
else :
    echo "odd number";
endif;
