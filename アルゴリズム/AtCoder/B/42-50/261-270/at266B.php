<?php
$N = trim(fgets(STDIN));
$ans = $N % 998244353;
if ($ans >= 0) {
    echo $ans;
} else {
    $ans = $ans + 998244353;
    echo $ans;
}
