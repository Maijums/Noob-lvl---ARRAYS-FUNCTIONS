<?php
/*
 * Make an array of the names in h1s, and the ages in h2s.

function readyToPutInTheDOM(arr) {
  // your code here
}
console.log(
  readyToPutInTheDOM([
    {
      name: "Angelina Jolie",
      age: 80,
    },
    {
      name: "Eric Jones",
      age: 2,
    },
    {
      name: "Paris Hilton",
      age: 5,
    },
    {
      name: "Kayne West",
      age: 16,
    },
    {
      name: "Bob Ziroll",
      age: 100,
    },
  ])
);
// ["<h1>Angelina Jolie</h1><h2>80</h2>",
// "<h1>Eric Jones</h1><h2>2</h2>",
// "<h1>Paris Hilton</h1><h2>5</h2>",
// "<h1>Kayne West</h1><h2>16</h2>",
// "<h1>Bob Ziroll</h1><h2>100</h2>"]
 */

$readyToPutInTheDOM = [
    [
        'name' => "Angelina Jolie",
        'age' => 80,
    ],
    [
        'name' => "Eric Jones",
        'age'=> 2,
    ],
    [
        'name' => "Paris Hilton",
        'age' => 5,
    ],
    [
        'name' => "Kayne West",
        'age' => 16,
    ],
    [
        'name' => "Bob Ziroll",
        'age' => 100,
    ],
];

$name = array_column($readyToPutInTheDOM, 'name');
$age = array_column($readyToPutInTheDOM, 'age');

//echo "<h1>$namesOnly</h1><h2>$agesOnly</h2>" . PHP_EOL;

function putInDOM (string $name, int $age): string {
    return "<h1>$name</h1><h2>$age</h2>" . PHP_EOL;
}

$inDOM = array_map('putInDOM', $name, $age);

print_r($inDOM);