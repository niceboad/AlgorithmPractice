<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$totalTime = $stdinArray[0] + $stdinArray[1]; //合計時間
if ($totalTime >= 24) {
    echo $totalTime - 24; //24時以上の場合、0時からに戻す。
} else {
    echo $totalTime;
}
