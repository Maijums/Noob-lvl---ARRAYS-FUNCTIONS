<?php
/*
 Consider an array/list of sheep where some sheep may be missing from their place.
 We need a function that counts the number of sheep present in the array (true means present).

For example:
[
  true,
  true,
  true,
  false,
  true,
  true,
  true,
  true,
  true,
  false,
  true,
  false,
  true,
  false,
  false,
  true,
  true,
  true,
  true,
  true,
  false,
  false,
  true,
  true,
];

The correct answer would be 17.
 */

$sheep = [
    true,
    true,
    true,
    false,
    true,
    true,
    true,
    true,
    true,
    false,
    true,
    false,
    true,
    false,
    false,
    true,
    true,
    true,
    true,
    true,
    false,
    false,
    true,
    true,
];

function numberOfSheep(array $a): int
{
    $search = 'true';
    $replace = '1';
    array_walk($a,
        function (&$v) use ($search, $replace) {
            $v = str_replace($search, $replace, $v);
        }
    );
    return (array_count_values($a))[1] . PHP_EOL;
}

echo numberOfSheep($sheep) . "\n";