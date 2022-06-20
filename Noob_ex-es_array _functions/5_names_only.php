<?php
/*
 * function namesOnly(arr) {
  // your code here
}

console.log(
    namesOnly([
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
// ["Angelina Jolie", "Eric Jones", "Paris Hilton", "Kayne West", "Bob Ziroll"]
 */

$names_ages = [
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

$namesOnly = array_column($names_ages, 'name');

print_r($namesOnly);

var_dump($namesOnly);
