<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$left = $stdinArray[0] + $stdinArray[1];
$right = $stdinArray[2] + $stdinArray[3];

if ($left > $right) {
    echo "Left";
} elseif ($left == $right) {
    echo "Balanced";
} else {
    echo "Right";
}
