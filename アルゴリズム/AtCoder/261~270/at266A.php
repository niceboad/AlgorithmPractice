<?php
$s = trim(fgets(STDIN));
$count = strlen($s);
$T = floor((abs($count) + 1) / 2);
$ans = substr($s, $T - 1, 1);
echo $ans;
