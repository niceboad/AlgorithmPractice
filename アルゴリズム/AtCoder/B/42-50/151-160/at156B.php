<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$quotient = $stdinArray[0]; //商
$count = 0;

do {
    $quotient = floor($quotient / $stdinArray[1]);
    $count = $count + 1; //割った回数をカウント：桁数をカウント
} while ($quotient != 0);
echo $count;
