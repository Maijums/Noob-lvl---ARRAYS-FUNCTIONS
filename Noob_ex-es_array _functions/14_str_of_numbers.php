<?php
/*
 Turn an array of numbers into a long string of all those numbers.

function stringConcat(arr) {
  // your code here
}

console.log(stringConcat([1, 2, 3])); // "123"
 */

$arrayOfNumbers = [1, 2, 3];

$strings = array_map(function ($num) {
    return strval($num);
}, $arrayOfNumbers);

$stringOfNumbers = implode("", $arrayOfNumbers);

var_dump($stringOfNumbers) . PHP_EOL;