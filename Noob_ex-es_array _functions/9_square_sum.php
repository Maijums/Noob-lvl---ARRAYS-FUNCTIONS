<?php
/*
 Complete the square sum function so that it squares each number passed into it
 and then sums the results together.
 Example:
 [1, 2, 2]; // => 1^2 + 2^2 + 2^2 = 9.
 */

$numsToSquare = [1, 2, 2];

$square = array_map(function ($num) {
    return pow($num, 2);
}, $numsToSquare);

$squareSum = array_sum($square);

print_r($squareSum);

echo PHP_EOL;


