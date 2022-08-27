<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$temp = ($stdinArray[0] + $stdinArray[1]) / 2;
$ans = ceil($temp);
echo $ans;
