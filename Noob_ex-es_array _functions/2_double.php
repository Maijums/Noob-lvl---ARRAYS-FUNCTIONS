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
