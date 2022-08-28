<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$ans = $stdinArray[0] * $stdinArray[1];

if ($ans % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}
