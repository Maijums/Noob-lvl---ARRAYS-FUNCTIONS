<?php
/*
 Given an array of arrays, flatten them into a single array

function flatten(arr) {
  // your code here
}

var arrays = [["1", "2", "3"], [true], [4, 5, 6]];

console.log(flatten(arrays)); // ["1", "2", "3", true, 4, 5, 6];
 */

$arrays = [["1", "2", "3"], [true], [4, 5, 6]];

$bigArray = array_merge(...$arrays);

var_dump($bigArray);
