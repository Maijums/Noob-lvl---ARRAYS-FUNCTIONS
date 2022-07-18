<?php
/*
 Write a function shiftLetters that takes a string and uses .map to return an encoded string with
each letter shifted down the alphabet by one.

Hint: Use Look up the JS functions String.fromCharCode() and String.CharCodeAt() and see if you can use Ascii code
to accomplish this.

const shiftLetters = function (string) {
  // code!
};

shiftLetters("hello"); // => 'ifmmp'
shiftLetters("abcxyz"); // => "bcdyz{"
 */


function ascii($letter): int {
    return ord($letter);
}

function shiftLetters($string): string
{
    $chars = str_split($string);
    $newChars = [];

    foreach ($chars as $char) {
        $next = ascii($char) + 1;
        $newChars[] = chr($next);
    }
    return implode($newChars);
}

echo shiftLetters("hello", ) . "\n";
echo shiftLetters("abcxyz") . "\n";




/*

function shift($string, $distance) {
    $distance = $distance % 26;
    $string = strtolower($string);
    $result = array();
    $characters = str_split($string);

    if ($distance < 0) {
        $distance += 26;
    }

    foreach ($characters as $idx => $char) {
        $result[$idx] = chr(97 + (ord($char) - 97 + $distance) % 26);
    }

    return join("", $result);
}


*/


