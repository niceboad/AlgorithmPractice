<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$abs1 = abs($stdinArray[0] - $stdinArray[1]); //xとaの距離
$abs2 = abs($stdinArray[0] - $stdinArray[2]); //xとbの距離

if ($abs1 <= $abs2) {
    echo "A";
} else {
    echo "B";
}
