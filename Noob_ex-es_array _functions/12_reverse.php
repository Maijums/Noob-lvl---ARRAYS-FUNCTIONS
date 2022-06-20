<?php
/*
 Given a random non-negative number, you have to return the digits of this number
 within an array in reverse order.

348597; // => [7,9,5,8,4,3]
 */

$num = 348597;

$numToArray = array_map('intval', str_split($num));

print_r(array_reverse($numToArray));

//$reverseNumber =
/*
$rev_num = 0;
$base_pos = 1;

/* Recursive function to reverse digits of num*/
/*
function reverseDigits($num) {
    global $rev_num;
    global $base_pos;
    if($num > 0) {
        reverseDigits((int)($num / 10));
        $rev_num += ($num % 10) *
            $base_pos;
        $base_pos *= 10;
    }
    return $rev_num;
}

echo reverseDigits($num) . PHP_EOL;
*/