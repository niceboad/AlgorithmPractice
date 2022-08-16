<?php
$N = trim(fgets(STDIN));
$K = trim(fgets(STDIN));
$X = trim(fgets(STDIN));
$Y = trim(fgets(STDIN));
$amount1 = 0;
$amount2 = 0;

for ($i = 1; $i < $N + 1; $i++) {
    if ($i <= $K) {
        $amount2 += $X;
    }
    if ($i > $K) {
        $amount2 += $Y;
    }
}

$ans = $amount1 + $amount2;
echo $ans;
