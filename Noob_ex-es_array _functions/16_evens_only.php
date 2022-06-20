<?php
/*
 Given an array of numbers, return a new array that only includes the even numbers.

function evensOnly(arr) {
  // your code here
}
// test
console.log(evensOnly([3, 6, 8, 2])); /// [6, 8, 2]
 */

$arrayOfNumbers = [3, 6, 8, 2];

function evensOnly($num): int
{
    if ($num % 2 != 0) {
        return false;
    }
    return $num;
}

$fiveAndGreater = array_filter($arrayOfNumbers, 'evensOnly');

print_r($fiveAndGreater);