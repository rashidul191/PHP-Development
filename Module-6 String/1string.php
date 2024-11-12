<?php
$name = "Rashidul";
$str = "I am $name Islam,I am web \n\t developer";
echo $str;
echo "\n";
echo PHP_EOL;
$str = 'I am $name Islam,  
              I am web \n\t developer';
echo $str;


echo PHP_EOL;
echo PHP_EOL;

$heredoc = <<<EOD
data1    dataTest
data2
data3
EOD;

echo $heredoc;
