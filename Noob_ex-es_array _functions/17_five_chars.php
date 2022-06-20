<?php
/*
Given an array of strings, return a new array that only includes those that are 5 characters or fewer.

function fiveCharactersOrFewerOnly(arr) {
    // your code here
}
// test
console.log(
    fiveCharactersOrFewerOnly(["dog", "wolf", "by", "family", "eaten", "camping"])
); // ["by", "dog", "wolf", "eaten"]
*/

$words = ["dog", "wolf", "by", "family", "eaten", "camping"];

function chars ($word): string {
    return strlen($word) <= 5;
}

$fiveCharactersOrFewerOnly = array_filter($words, 'chars');

print_r($fiveCharactersOrFewerOnly);
