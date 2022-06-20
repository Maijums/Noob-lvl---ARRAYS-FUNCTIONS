<?php
/*
 Given an array of numbers, return a new array that has only the numbers that are 5 or greater.

function fiveAndGreaterOnly(arr) {
  // your code here
}
// test
console.log(fiveAndGreaterOnly([3, 6, 8, 2])); /// [6, 8]

 */

$arrayOfNumbers = [3, 6, 8, 2];

function greater($num): int {
    return $num > 5;
}

$fiveAndGreater = array_filter($arrayOfNumbers, 'greater');

print_r($fiveAndGreater);