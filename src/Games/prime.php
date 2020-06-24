<?php

namespace BrainGames\Games\prime;

use function BrainGames\game\playGame;

function run()
{
    $startMsg = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    $getGameData = function () {
        $question = mt_rand(0, 100);
        $correctAnswer = isPrime($question) ? "yes" : "no";

        return [$question, $correctAnswer];
    };

    playGame($startMsg, $getGameData);
}

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
