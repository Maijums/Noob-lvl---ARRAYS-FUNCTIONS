<?php
/*
 You get an array of numbers, return the sum of all the positives ones.
Example:
[1, -4, 7, 12]; // => 1 + 7 + 12 = 20
 */

$mixedNumbers = [1, -4, 7, 12];

function positive ($num): int {
    return $num > 0;
}

$positiveNumbers = array_filter($mixedNumbers, 'positive');

print_r($positiveNumbers);

$sumOfPositiveOnes = array_sum($positiveNumbers);

print_r($sumOfPositiveOnes);
echo PHP_EOL;