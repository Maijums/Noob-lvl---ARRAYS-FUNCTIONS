<?php
/*
 Make an array of numbers that are doubles of the first array.

function doubleNumbers(arr) {
  // your code here
}
console.log(doubleNumbers([2, 5, 100])); // [4, 10, 200]
 */

$numbers = [10, 20, 30];

// 1. variants
$doubleNumbers = array_map(function ($num) {
    return $num * 2;
}, $numbers);

print_r($doubleNumbers);

/*
// 2. variants
$numbers = [10, 20, 30];

function double($num) {
    return $num * 2;
}

$doubleNumbers = array_map('double', $numbers);

print_r($doubleNumbers);

*/


/*
// Loop

$numbersToDouble = [2, 5, 100];
$result = [];

foreach ($numbersToDouble as $num) {
    $result[] = $num * 2;
}

print_r($result) . PHP_EOL;

var_dump($result) . PHP_EOL;
*/

/*
//NULL
$nums = [11, 22, 33];

function double(array $nums)
{
    array_map(function ($num) {
        return $num * 2;
    }, $nums);
}

var_dump(double($nums)); // NULL
*/
