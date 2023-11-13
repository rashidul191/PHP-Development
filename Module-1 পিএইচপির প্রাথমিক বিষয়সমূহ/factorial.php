<?php
// factorial 
// 5 = 5*4*3*2*1

/*
0+1=1
1+2=3
3+3=6
6+4=10
10+5=15
15+6=21
21+7=28
28+8=36
36+9=45
40+10=55
*/

$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    echo $sum . "+" . $i . "=" . $sum + $i . "\n";
    $sum += $i;
}
// echo $num;F


echo "\n";


/* 

1=1;
2=2*1;
3=3*2*1;
4=4*3*2*1;
5=5*4*3*2*1;

*/
// $f = 1;
// $n = 0;
// for ($i = 1; $i <= 10; $i++) {
//     $f *= $i;
//     // echo " ={$f}";
//     for ($j = 1; $j <= $i; $j++) {
//         echo "{$j}*";
//         $n++;
//     }
//     echo "={$f} \n";
// }

// echo "\n Operation counter: $n";

// $result = 1;
// $n = 10;
// for ($i = 1; $i <= $n; $i++) {
//     $result *= $i;
//     echo "\n Factorial of {$i} is {$result}";
// }




// Write a function that return of event numbers of array.
// Here input is : $numbersOfArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// Output is : [2,4,6,8] 

function eventNumber($numbers)
{

    $eventNumbers = [];
    // print_r(count($numbers));
    for ($i = 0; $i < count($numbers); $i++) {
        $number = $numbers[$i];
        if ($number % 2 === 0) {

            // echo $number;
            // $number;
            // $eventNumbers[] = $number;
            array_push($eventNumbers, $number);
        }
    }

    return $eventNumbers;
}

$numbersOfArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = eventNumber($numbersOfArray);

print_r($result);
