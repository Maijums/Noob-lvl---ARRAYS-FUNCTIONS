<?php
/*
 Given an array of integers.

Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.

If the input array is empty or null, return an empty array.

Example:
For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
 */

$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];

function positive ($num): int {
    return $num > 0;
}

function negative ($num): int {
    return $num < 0;
}

$positiveNumbers = array_filter($input, 'positive');

$negativeNumbers = array_filter($input, 'negative');

$sumOfNegatives = array_sum($negativeNumbers);

$output = [count($positiveNumbers), $sumOfNegatives];

if ($input = [] || $input = null) {
    $output = [];
}

print_r($output) . PHP_EOL;

