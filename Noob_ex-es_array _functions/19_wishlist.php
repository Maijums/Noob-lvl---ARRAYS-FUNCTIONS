<?php
/*
 Given an array of all your wishlist items, figure out how much it would cost to just buy everything at once.

function shoppingSpree(arr) {
  // your code here
}

var wishlist = [
  { title: "Tesla Model S", price: 90000 },
  { title: "4 carat diamond ring", price: 45000 },
  { title: "Fancy hacky Sack", price: 5 },
  { title: "Gold fidget spinner", price: 2000 },
  { title: "A second Tesla Model S", price: 90000 },
];

console.log(shoppingSpree(wishlist)); // 227005
 */

$wishlist = [
  ['title'=>"Tesla Model S", 'price'=>90000],
  ['title'=>"4 carat diamond ring", 'price'=>45000],
  ['title'=>"Fancy hacky Sack", 'price'=>5],
  ['title'=>"Gold fidget spinner", 'price'=>2000],
  ['title'=>"A second Tesla Model S", 'price'=>90000],
];

$prices = array_column($wishlist, 'price');

$shoppingSpree = array_sum($prices);

print_r($shoppingSpree);
echo PHP_EOL;