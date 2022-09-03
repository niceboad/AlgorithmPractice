<?php
$S = trim(fgets(STDIN));
$daynumber = 6; //土曜日は、月曜日から数えると６番目なので、６をセット
if ($S == "Monday") {
    echo $daynumber - 1; //月曜日は、月曜日から数えると１番目なので、土曜日との差分をとる。
} elseif ($S == "Tuesday") {
    echo $daynumber - 2; //火曜日は、月曜日から数えると２番目なので、土曜日との差分をとる。
} elseif ($S == "Wednesday") {
    echo $daynumber - 3; //水曜日は、月曜日から数えると３番目なので、土曜日との差分をとる。
} elseif ($S == "Thursday") {
    echo $daynumber - 4; //木曜日は、月曜日から数えると４番目なので、土曜日との差分をとる。
} else {
    echo $daynumber - 5; //金曜日の場合
}
