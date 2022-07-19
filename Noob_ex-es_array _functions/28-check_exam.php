<?php
/*
 The first input array is the key to the correct answers to an exam, like ["a", "a", "b", "d"].
 The second one contains a student's submitted answers.

 The two arrays are not empty and are the same length. Return the score for this array of answers,
 giving +4 for each correct answer, -1 for each incorrect answer, and +0 for each blank answer,
 represented as an empty string (in C the space character is used).

If the score < 0, return 0.

Example:

checkExam(["a", "a", "b", "b"], ["a", "c", "b", "d"]); // => 6
checkExam(["a", "a", "c", "b"], ["a", "a", "b", ""]); // => 7
checkExam(["a", "a", "b", "c"], ["a", "a", "b", "c"]); // => 16
checkExam(["b", "c", "b", "a"], ["", "a", "a", "c"]); // => 0
*/

function checkExam(array $a, array $answers)
{
    $pointsPerCorrect = 4;
    $pointsPerWrong = -1;
    $pointsPerBlank = 0;
    $totalPoints = 0;

    $correctAnswers = [];
    $wrongAnswers = [];

    $correctAnswers = array_intersect_assoc($answers, $a);
    $pointsForCorrect = count($correctAnswers) * $pointsPerCorrect;

    foreach ($answers as $answer) {
        if ($answer != "") {
            $wrongAnswers = array_diff_assoc($answers, $a);

            $wrongAnswers = array_filter($wrongAnswers, static function ($element) {
                return $element !== "";
            });

        }
    }
    
    $pointsForWrong = count($wrongAnswers) * $pointsPerWrong;
    $totalPoints = $pointsForCorrect + $pointsForWrong;

    if ($totalPoints < 0) {
        $totalPoints = 0;
    }
    return $totalPoints;
}

echo checkExam(["a", "a", "b", "b"], ["a", "c", "b", "d"]); // => 6
echo PHP_EOL;
echo checkExam(["a", "a", "c", "b"], ["a", "a", "b", ""]); // => 7
echo PHP_EOL;
echo checkExam(["a", "a", "b", "c"], ["a", "a", "b", "c"]); // => 16
echo PHP_EOL;
echo checkExam(["b", "c", "b", "a"], ["", "a", "a", "c"]); // => 0
echo PHP_EOL;

