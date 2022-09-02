<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$ans = $stdinArray[0] - 1;
if ($stdinArray[0] <= $stdinArray[1]) {
    $ans = $ans + 1;
}
echo $ans;
