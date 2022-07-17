<?php
/*
 Given an array of potential voters, return an object representing the results of the vote

Include how many of the potential voters were in the ages 18-25, how many from 26-35, how many from 36-55,
and how many of each of those age ranges actually voted. The resulting object containing this data should have
6 properties. See the example output at the bottom.

const voters = [
  { name: "Bob", age: 30, voted: true },
  { name: "Jake", age: 32, voted: true },
  { name: "Kate", age: 25, voted: false },
  { name: "Sam", age: 20, voted: false },
  { name: "Phil", age: 21, voted: true },
  { name: "Ed", age: 55, voted: true },
  { name: "Tami", age: 54, voted: true },
  { name: "Mary", age: 31, voted: false },
  { name: "Becky", age: 43, voted: false },
  { name: "Joey", age: 41, voted: true },
  { name: "Jeff", age: 30, voted: true },
  { name: "Zack", age: 19, voted: false },
];

function voterResults(arr) {
  // your code here
}

console.log(voterResults(voters)); // Returned value shown below:

{
    numYoungVotes: 1,
    numYoungPeople: 4,
    numMidVotesPeople: 3,
    numMidsPeople: 4,
    numOldVotesPeople: 3,
    numOldsPeople: 4
}
 */

$voters = [
  ['name'=>"Bob", 'age'=>30, 'voted'=>true],
  ['name'=>"Jake", 'age'=>32, 'voted'=>true],
  ['name'=>"Kate", 'age'=>25, 'voted'=>false],
  ['name'=>"Sam", 'age'=>20, 'voted'=>false],
  ['name'=>"Phil", 'age'=>21, 'voted'=>true],
  ['name'=>"Ed", 'age'=>55, 'voted'=>true],
  ['name'=>"Tami", 'age'=>54, 'voted'=>true],
  ['name'=>"Mary", 'age'=>31, 'voted'=>false],
  ['name'=>"Becky", 'age'=>43, 'voted'=>false],
  ['name'=>"Joey", 'age'=>41, 'voted'=>true],
  ['name'=>"Jeff", 'age'=>30, 'voted'=>true],
  ['name'=>"Zack", 'age'=>19, 'voted'=>false]
];

$youngVoters = [];
$midVoters = [];
$oldVoters = [];

foreach ($voters as $voter) {
    if ($voter['age'] >= 18 && $voter['age'] <= 25) {
        $youngVoters[] = $voter;
    } elseif ($voter['age'] >= 26 && $voter['age'] <= 35) {
        $midVoters[] = $voter;
    } else {
        $oldVoters[] = $voter;
    }
}

$numYoungPeople = count($youngVoters);
$numMidPeople = count($midVoters);
$numOldPeople = count($oldVoters);

$youngVotes = array_column($youngVoters, 'voted');

$search = 'true';
$replace = '1';
array_walk($youngVotes,
    function (&$v) use ($search, $replace){
        $v = str_replace($search, $replace, $v);
    }
);
$numYoungVotes = (array_count_values($youngVotes))[1];

$midVotes = array_column($midVoters, 'voted');

array_walk($midVotes,
    function (&$v) use ($search, $replace){
        $v = str_replace($search, $replace, $v);
    }
);
$numMidVotes = (array_count_values($midVotes))[1];

$oldVotes = array_column($oldVoters, 'voted');

array_walk($oldVotes,
    function (&$v) use ($search, $replace){
        $v = str_replace($search, $replace, $v);
    }
);
$numOldVotes = (array_count_values($oldVotes))[1];

echo "numYoungVotes: $numYoungVotes," . PHP_EOL;
echo "numYoungPeople: $numYoungPeople," . PHP_EOL;
echo "numMidVotes: $numMidVotes," . PHP_EOL;
echo "numMidPeople: $numMidPeople," . PHP_EOL;
echo "numOldVotes: $numOldVotes," . PHP_EOL;
echo "numOldPeople: $numOldPeople," . PHP_EOL;


