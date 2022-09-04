<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
sort($stdinArray);
$stdinArray[0] = abs($stdinArray[0] - $stdinArray[1]);
$stdinArray[1] = abs($stdinArray[1] - $stdinArray[2]);
$ans = $stdinArray[0] + $stdinArray[1];
echo $ans;
