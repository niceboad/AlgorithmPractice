<?php
//標準入力
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);

//A+Bの結果を格納
$puls = $stdinArray[0] + $stdinArray[1];

//A-Bの結果を格納
$minus =  $stdinArray[0] - $stdinArray[1];

//A*Bの結果を格納
$multiplication = $stdinArray[0] * $stdinArray[1];

//最大値を格納
$ans = max($puls, $minus, $multiplication);

//最大値を出力
echo $ans;
