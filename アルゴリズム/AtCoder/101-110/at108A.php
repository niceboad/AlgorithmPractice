<?php
$K = trim(fgets(STDIN));
$evenCount = 0;
$oddCount = 0;
if ($K % 2 == 0) {
    $evenCount = floor($K / 2); //偶数の数を算出
    $oddCount = floor($K / 2);
} else {
    $oddCount = floor(($K / 2) + 1); //奇数の数を算出
    $evenCount = floor($K / 2);
}

$ans = $evenCount * $oddCount;
echo $ans;
