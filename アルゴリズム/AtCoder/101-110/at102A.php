<?php
$N = trim(fgets(STDIN));
$ans = gmp_lcm(2, $N); //最小公倍数を求める。
echo $ans;
