<?php
/*
  Input: Array of elements: ["h", "o", "l", "a"];
  Output: String with comma delimited elements of the array in the same order: "h,o,l,a";
 */

$letters = ["h", "o", "l", "a"];

$list = implode(',', $letters);

echo $list . PHP_EOL;

var_dump($list) . PHP_EOL;
