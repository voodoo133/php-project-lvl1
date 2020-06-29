<?php

namespace BrainGames\Games\even;

use function BrainGames\game\playGame;

function run()
{
    $startMsg = 'Answer "yes" if the number is even, otherwise answer "no".';

    $getGameData = function () {
        $question = mt_rand(0, 100);
        $correctAnswer = $question % 2 === 0 ? "yes" : "no";

        return [$question, $correctAnswer];
    };

    playGame($startMsg, $getGameData);
}
