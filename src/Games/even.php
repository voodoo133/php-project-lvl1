<?php

namespace BrainGames\Games\even;

DEFINE("NUM_ROUNDS", 3);

use function cli\line;
use function cli\prompt;

function run()
{
    line("Welcome to the Brain Games!");
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    line("\n");

    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line("\n");

    $right_answers_amount = 0;

    while (1) {
        $num = mt_rand(0, 100);
        $correct_answer = $num % 2 === 0 ? "yes" : "no";

        line("Question: {$num}");
        $answer = prompt("Your answer");
        $answer = trim($answer);

        if ($answer === $correct_answer) {
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
