<?php

namespace BrainGames\Games\gcd;

use function BrainGames\game\playGame;

function run()
{
    $startMsg = 'Find the greatest common divisor of given numbers.';

    $getGameData = function () {
        $a = mt_rand(1, 25);
        $b = mt_rand(1, 25);

        $question = "{$a} {$b}";
        $correctAnswer = getGCD($a, $b);

        return [$question, $correctAnswer];
    };

    playGame($startMsg, $getGameData);
}

function getGCD($a, $b)
{
    while ($a !== 0 && $b !== 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }

    return $a + $b;
}
