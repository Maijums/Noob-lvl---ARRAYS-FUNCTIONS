<?php
/*
 Write a method, that will get an integer array as parameter and will process every number from this array.
 Return a new array with processing every number of the input-array like this:

[4, 3, 9, 7, 2, 1]; // => [2,9,3,49,4,1]

If the number has an integer square root, take this, otherwise square the number.

The input array should not be modified!
 */

$integers = [4, 3, 9, 7, 2, 1];

$squareRoot = array_map(function($int) {
    return sqrt($int);
}, $integers);

//print_r($squareRot);

function isInteger($num): bool
{
    return is_int(sqrt($num));
}

$processedNumbers = array_map(function ($num) {
    if (isInteger($num)) {
        return $num;
    } else {
        return pow($num, 4);
    }
 }, $squareRoot);

print_r($processedNumbers);






/*

$isNotInteger = array_map(function($num) {
    if (is_int($num)) {
        return $num;
    } else {
        return pow($num, 4);
    }
}, $squareRoot);

print_r($isNotInteger);
*/
/*
$a = 0;
function isInteger(int $a) {

    if (is_int(sqrt($a))) {
        return true;
    }
}

$squareRoot = array_map(function ($int) {

    if (isInteger(sqrt($int))) {
        return sqrt($int);
    } else {
        return pow($int, 2);;
    }
}, $integers);

print_r($squareRoot);
*/
/*
$sqr = sqrt(4);

if ($isInt = is_int($sqr)) {
    return $sqr;
}

echo $sqr . PHP_EOL;



$squareRoot = array_map(function ($int) {
    $sqr = sqrt($int);
    $isNotInt = !is_int($sqr);
    if ($isNotInt) {
        return pow($int, 2);
    } else {
        return $sqr;
    }
}, $integers);

print_r($squareRoot);
*/
    /*



print_r($squareRoot);
*/
//$processedIntegers = [$squareRoot];

