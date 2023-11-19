<?php

$person = array("fname" => "John", "lname" => "Son");
/* 
copy by value;
deep copy;
// copy by total value;
 */
$newPerson = $person;
$newPerson["lname"] = "Lend";

// print_r($person);
// print_r($newPerson);

/* 
copy by reference;
shallow copy;
 // here copy of $person memory address;
*/
$newPerson = &$person;
$newPerson["lname"] = "Lend";

print_r($person);
print_r($newPerson);

echo "\n";

function printData($person)
{
    $person["fname"] .= " Change";
    print_r($person);
}

// printData($person);
// print_r($person);

function printData2(&$person)
{
    $person["fname"] .= " Change";
    print_r($person);
}

printData2($person);
print_r($person);
