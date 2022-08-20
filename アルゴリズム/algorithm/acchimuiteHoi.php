<?php

$hand = ["グー", "チョキ", "パー"];
$count = count($hand);
$random = rand(0, $count - 1);
$JankenAite = $hand[$random];



$direction = ["上", "下", "右", "左"];
$count2 = count($direction);
$random2 = rand(0, $count - 1);
$directionAite = $direction[$random2];


$directionAite = "下";
while (true) {
    echo "じゃんけんポン！";
    PHP_EOL;
    echo "1(グー)、2(チョキ)、3(パー)を数字で入力して下さい";
    PHP_EOL;
    $JankenJibun = trim(fgets(STDIN));



    if ($JankenJibun == 1 && $JankenAite == "チョキ" || $JankenJibun == 2 && $JankenAite == "パー" || $JankenJibun == 3 && $JankenAite == "グー") {
        echo "あっちむいてホイ！";
        PHP_EOL;
        echo "1(上)、2(下)、3(右)、4(左)を数字で入力して下さい";
        PHP_EOL;
        $directionJibun = fgets(STDIN);
        if ($directionJibun == 1 && $directionAite == "上" || $directionJibun == 2 && $directionAite == "下" || $directionJibun == 3 && $directionAite == "右" || $directionJibun == 4 && $directionAite == "左") {
            echo "勝ち！";
            break;
        }
    } elseif ($JankenJibun == 1 && $JankenAite == "パー" || $JankenJibun == 2 && $JankenAite == "グー" || $JankenJibun == 3 && $JankenAite == "チョキ") {
        echo "あっちむいてホイ！";
        PHP_EOL;
        echo "1(上)、2(下)、3(右)、4(左)を数字で入力して下さい";
        PHP_EOL;
        $directionJibun = fgets(STDIN);

        if ($directionJibun == 1 && $directionAite == "上" || $directionJibun == 2 && $directionAite == "下" || $directionJibun == 3 && $directionAite == "右" || $directionJibun == 4 & $directionAite == "左") {
            echo "負け！";
            break;
        }
    }
}
