<?php

namespace BrainGames\game;

DEFINE("NUM_OF_ROUNDS", 3);

use function cli\line;
use function cli\prompt;

function playGame($startMsg, $getGameData)
{
    line("Welcome to the Brain Games!");
    line($startMsg);
    line("\n");

    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line("\n");

    $rightAnswersAmount = 0;

    while ($rightAnswersAmount < NUM_OF_ROUNDS) {
        list($question, $correctAnswer) = $getGameData();

        line("Question: {$question}");
        $answer = prompt("Your answer");
        $answer = trim($answer);

        if ($answer == $correctAnswer) {
            line("Correct!");
            $rightAnswersAmount++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");

            return;
        }
    }

    line("Congratulations, {$name}!");
}
