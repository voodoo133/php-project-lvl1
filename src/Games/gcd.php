<?php

namespace BrainGames\Games\gcd;

use function BrainGames\game\startGame;

function run()
{
    $start_msg = "Find the greatest common divisor of given numbers.";

    $get_game_data = function () {
        $a = mt_rand(1, 25);
        $b = mt_rand(1, 25);

        $question = "{$a} {$b}";
        $correct_answer = getGCD($a, $b);

        return [$question, $correct_answer];
    };

    startGame($start_msg, $get_game_data);
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
