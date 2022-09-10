<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);

sort($stdinArray);
$ans = ($stdinArray[2] . $stdinArray[1]) + $stdinArray[0];
echo $ans;
