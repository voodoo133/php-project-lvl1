<?php

namespace BrainGames\game;

DEFINE("NUM_ROUNDS", 3);

use function cli\line;
use function cli\prompt;

function startGame($start_msg, $get_game_data)
{
    line("Welcome to the Brain Games!");
    line($start_msg);
    line("\n");

    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line("\n");

    $right_answers_amount = 0;

    while (1) {
        list($question, $correct_answer) = $get_game_data();

        line("Question: {$question}");
        $answer = prompt("Your answer");
        $answer = trim($answer);

        if ($answer == $correct_answer) {
            line("Correct!");

            if (++$right_answers_amount === NUM_ROUNDS) {
                line("Congratulations, {$name}!");

                break;
            }
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct_answer}'.");
            line("Let's try again, {$name}!");

            break;
        }
    }
}
