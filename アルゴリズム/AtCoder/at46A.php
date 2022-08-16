<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$newArray = [];
sort($stdinArray);
$newArray = array_unique($stdinArray);
$ans = count($newArray);
echo $ans;
