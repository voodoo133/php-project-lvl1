<?php

namespace BrainGames\Games\calc;

use function BrainGames\game\playGame;

function run()
{
    $startMsg = 'What is the result of the expression?';

    $getGameData = function () {
        $a = mt_rand(1, 25);
        $b = mt_rand(1, 25);

        $operations = ['+', '-', '*'];
        $operatorKey = array_rand($operations, 1);
        $operation = $operations[$operatorKey];

        $question = "{$a} {$operation} {$b}";

        switch ($operation) {
            case '+':
                $correctAnswer = $a + $b;

                break;

            case '-':
                $correctAnswer = $a - $b;

                break;

            case '*':
                $correctAnswer = $a * $b;

                break;
        }

        return [$question, $correctAnswer];
    };

    playGame($startMsg, $getGameData);
}
