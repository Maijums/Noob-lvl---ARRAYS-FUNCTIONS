<?php
/*
 Take an array of numbers and make them strings.

function stringItUp(arr) {
  // your code here
}

console.log(stringItUp([2, 5, 100])); // ["2", "5", "100"]
 */

$numbers = [2, 5, 100];

$strings = array_map(function ($num) {
    return strval($num);
}, $numbers);

var_dump($strings);


