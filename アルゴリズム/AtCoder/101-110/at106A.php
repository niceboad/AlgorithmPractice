<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$totalYard = $stdinArray[0] * $stdinArray[1];
$minusYard = (($stdinArray[0] * 1) + ($stdinArray[1] * 1)) - 1;
$ans = $totalYard - $minusYard;
echo $ans;
