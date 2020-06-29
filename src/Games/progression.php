<?php

namespace BrainGames\Games\progression;

use function BrainGames\game\playGame;

DEFINE('PROGRESSION_LENGTH', 10);

function run()
{
    $startMsg = 'What number is missing in the progression?';

    $getGameData = function () {
        $initialNum = mt_rand(1, 10);
        $step = mt_rand(1, 5);

        $progression = generateProgression($initialNum, $step);

        $correctAnswerKey = mt_rand(0, PROGRESSION_LENGTH - 1);
        $correctAnswer = $progression[$correctAnswerKey];
        $progression[$correctAnswerKey] = '..';

        $question = join(" ", $progression);

        return [$question, $correctAnswer];
    };

    playGame($startMsg, $getGameData);
}

function generateProgression($initialNum, $step)
{
    $progression = [];

    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $progression[] = $initialNum + $i * $step;
    }

    return $progression;
}
