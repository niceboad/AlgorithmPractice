<?php
function getGreeting()
{
    $morning = 1; //1なら朝
    $daytime = 0; //1なら昼
    $night = 0; //1なら夜

    if ($morning == 1) {
        echo "現在は、朝です。";
        echo PHP_EOL;
        echo "おはようございます。";
        echo PHP_EOL;
        $morning -= 1;
    }
    $daytime += 1; //昼にする。
    if ($daytime == 1) {
        echo "現在は、昼です。";
        echo PHP_EOL;
        echo "こんにちは。";
        echo PHP_EOL;
        $daytime -= 1;
    }
    $night += 1;
    if ($night == 1) {
        echo "現在は、夜です。";
        echo PHP_EOL;
        echo "こんばんは。";
        echo PHP_EOL;
    }
}
getGreeting();
