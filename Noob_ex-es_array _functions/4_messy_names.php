<?php
/*
 * Capitalize each of an array of names.

function capitalizeNames(arr) {
  // your code here
}

console.log(capitalizeNames(["john", "JACOB", "jinGleHeimer", "schmidt"]));

 Must print: ["John", "Jacob", "Jingleheimer", "Schmidt"]

 */

$messyNames = ["john", "JACOB", "jinGleHeimer", "schmidt"];

$lowerNames = array_map( 'strtolower', $messyNames);

$neatNames = array_map('ucwords', $lowerNames);

print_r($neatNames);





/*

$lowerCase = array_map(function ($name) {
    return strtolower($name);
}, $messyNames);


// Display the content of array:

foreach( $lowerCase as $name)
    echo $name . "\n";

*/









