<?php
/*
 Write a function that takes a string and returns an object representing the character count for each letter.

const countLetters = function (string) {
  // your code here
};

countLetters("abbcccddddeeeee"); // => {a:1, b:2, c:3, d:4, e:5}
 */

function countLetters ($string) {
    $chars = str_split($string);
    $cnt = array_count_values($chars);
    return $cnt;
}

print_r(countLetters("abbcccddddeeeee"));