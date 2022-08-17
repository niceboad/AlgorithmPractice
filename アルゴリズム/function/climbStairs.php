<?php
function climbStairs($stairs)
{
    $steps = 1; // 歩数
    $remainingStairs = $stairs; // 残り階段数

    echo "階段数は、${stairs}段です";
    echo PHP_EOL;

    while ($steps <= $stairs) {
        $remainingStairs = $stairs - $steps;
        $steps = $steps + 1;

        if ($remainingStairs % 5 == 0) {
            echo "残り${remainingStairs}段です。"; // 5で割り切れるときに残り階段数を表示。
            echo PHP_EOL;
        }
        if ($remainingStairs == 0) {
            echo "階段を全て上りました。";
            echo PHP_EOL;
        }
    }
}
climbStairs(30);
climbStairs(58);
