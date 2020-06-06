<?php

namespace BrainGames\Games\calc;

use function BrainGames\game\startGame;

function run()
{
    $start_msg = "What is the result of the expression?";

    $get_game_data = function () {
        $a = mt_rand(1, 25);
        $b = mt_rand(1, 25);

        $operations = ['+', '-', '*'];
        $op_key = array_rand($operations, 1);
        $op = $operations[$op_key];

        $expression = "{$a} {$op} {$b}";

        $correct_answer = null;

        switch ($op) {
            case '+':
                $correct_answer = $a + $b;

                break;

            case '-':
                $correct_answer = $a - $b;

                break;

            case '*':
                $correct_answer = $a * $b;

                break;
        }

        return [$expression, $correct_answer];
    };

    startGame($start_msg, $get_game_data);
}
