<?php
/*
 Wolves have been reintroduced to Great Britain. You are a sheep farmer, and are now plagued by wolves which pretend
to be sheep. Fortunately, you are good at spotting them.

Warn the sheep in front of the wolf that it is about to be eaten. Remember that you are standing at the front of the
queue which is at the end of the array:

[sheep, sheep, sheep, sheep, sheep, wolf, sheep, sheep] (YOU ARE HERE AT THE FRONT OF THE QUEUE)
7 6 5 4 3 2 1

If the wolf is the closest animal to you, return "Pls go away and stop eating my sheep". Otherwise, return
"Oi! Sheep number N! You are about to be eaten by a wolf!" where N is the sheep's position in the queue.

Examples:

warnTheSheep(["sheep", "sheep", "sheep", "wolf", "sheep"]) ===
  "Oi! Sheep number 1! You are about to be eaten by a wolf!";
warnTheSheep(["sheep", "sheep", "wolf"]) ===
  "Pls go away and stop eating my sheep";
 */

function warnTheSheep(array $sheep): void
{
    $sheepReverse = array_reverse($sheep);
    $position = array_search("wolf", $sheepReverse);

    if ($position == 0) {
        echo "Pls go away and stop eating my sheep!";
    } else {
        echo "Oi! Sheep number $position! You are about to be eaten by a wolf!";
    }
}

echo warnTheSheep(["sheep", "sheep", "sheep", "wolf", "sheep"]) . "\n";
echo warnTheSheep(["sheep", "sheep", "wolf"]) . "\n";

