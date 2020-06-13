<?php

namespace BrainGames\Games\progression;

use function BrainGames\game\startGame;

DEFINE('PROGRESSION_LENGTH', 10);

function run()
{
    $start_msg = "What number is missing in the progression?";

    $get_game_data = function () {
        $initial_num = mt_rand(1, 10);
        $step = mt_rand(1, 5);

        $progression = [$initial_num];

        for ($i = 1; $i < PROGRESSION_LENGTH; $i++) {
            $progression[] = $progression[$i - 1] + $step;
        }

        $correct_answer_key = mt_rand(0, count($progression) - 1);
        $correct_answer = $progression[$correct_answer_key];
        $progression[$correct_answer_key] = '..';

        $question = join(" ", $progression);

        return [$question, $correct_answer];
    };

    startGame($start_msg, $get_game_data);
}
