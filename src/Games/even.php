<?php

namespace BrainGames\Games\even;

use function BrainGames\game\startGame;

function run()
{
    $start_msg = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $get_game_data = function () {
        $num = mt_rand(0, 100);
        $correct_answer = $num % 2 === 0 ? "yes" : "no";

        return [$num, $correct_answer];
    };

    startGame($start_msg, $get_game_data);
}
