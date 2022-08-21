<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$ans = $stdinArray[0] + $stdinArray[1];

if ($ans >= 10) {
    echo "error";
} else {
    echo $ans;
}
