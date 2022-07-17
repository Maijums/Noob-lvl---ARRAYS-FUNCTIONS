<?php
/*
 Write a new function called swapCase that takes a string of words and capitalizes every second word
 starting from the first one.

const swapCase = function (string) {
  // Codeeeee
};

swapCase("hey gurl, lets javascript together sometime"); // => "HEY gurl, LETS javascript TOGETHER sometime"
 */

function swapCase(string $text): string
{
    $words = explode(' ', $text);

    $caps = true;
    foreach ($words as $key => $word) {
        if ($caps) {
            $out = strtoupper($word);
            if ($out <> " ") //not a space character
                $caps = false;
        } else {
            $out = strtolower($word);
            $caps = true;
        }
        $words[$key] = $out;
    }
    return implode(' ', $words);
}

echo swapCase("hey gurl lets javascript together sometime") . "\n";




