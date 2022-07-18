<?php
/*
 Write a function that takes a string and a target, and returns true or false if the target is present in the string.

const isPresent = function (string, target) {
  // GO GO GADGET CODE!
};

isPresent("abcd", "b"); // => true
isPresent("efghi", "a"); // => false
 */

function isPresent($string, $target): string {
    $chars = str_split($string);
    if (in_array($target, $chars)) {
        return 'true';
    }
    return 'false';
}

echo isPresent("abcd", "b") . "\n"; // => true
echo isPresent("efghi", "a") . "\n"; // => false