<?php
/*
 Can you find the needle in the haystack?

Write a function findNeedle() that takes an array full of junk but containing one "needle"

After your function finds the needle it should return a message (as a string) that says:

"found the needle at position " plus the index it found the needle, so:

findNeedle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk']) => // should return "found the needle at position 5"
 */

function findNeedle(array $junk, string $needle): string
{
    $position = array_search($needle, $junk);
    return "Found the needle at position $position";
}

echo findNeedle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'], 'needle') . "\n";