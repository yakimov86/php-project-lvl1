<?php

namespace BrainGames\Games\Even;

use function BrainGames\Cli\run;

const DESCRIPTION = "Answer \"yes\" if the number is even, other answer\"no\".";
const MAX_RANDOM_VALUE = 99;

function isEven($num)
{
    return ($num % 2) === 0;
}

function runEven()
{
    $getEvenData = function () {
        $question = strval(mt_rand(1, MAX_RANDOM_VALUE));
        $currentAnswer = isEven($question) ? "yes" : "no";

        $gameData = [];
        $gameData['question'] = $question;
        $gameData['currentAnswer'] = $currentAnswer;
        return $gameData;
    };
    run($getEvenData, DESCRIPTION);
}
