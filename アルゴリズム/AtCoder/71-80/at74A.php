<?php
$N = trim(fgets(STDIN));
$A = trim(fgets(STDIN));
$grid = $N * $N;
$ans = $grid - $A;
echo $ans;
