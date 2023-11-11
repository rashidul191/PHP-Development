<?php
$name = "rashidul";
$common = 12;

echo "echo: {$name}, {$common}"; // output: echo: rashidul, 12
echo "\n";
var_dump("var_dump: ", $name, $common); // output: string(10) "var_dump: " string(8) "rashidul" int(12)
echo "\n";
// php print
printf("printf: ");
printf($common); // output : 12
echo "\n";
printf($name, $common); // output: rashidul
echo "\n";

print_r("print_r:");
print_r($name); // output : rashidul
echo "\n";
print_r($name, $common); // output nothing.



$fname = "rashiudl";
$lname = "islam";
printf("His Name is %s %s ", $fname, $lname);
echo "\n";
printf("His %s Name is %s", $fname, $lname);

echo "\n";
echo "
His 
Name 
is
{$fname}
{$lname}
";
