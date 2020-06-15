<?php

namespace BrainGames\Games\prime;

use function BrainGames\game\startGame;

function run()
{
    $start_msg = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    $get_game_data = function () {
        $num = mt_rand(0, 100);
        $correct_answer = isPrime($num) ? "yes" : "no";

        return [$num, $correct_answer];
    };

    startGame($start_msg, $get_game_data);
}

function isPrime($number)
{
    if ($number == 1) {
        return false;
    }
    
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
