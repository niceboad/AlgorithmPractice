<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$comparison1 = $stdinArray[0] + $stdinArray[1];

if ($comparison1 >= $stdinArray[2]) {
    if ($stdinArray[0] >= $stdinArray[2]) {
        echo "delicious";
    } elseif ($stdinArray[0] >= $stdinArray[2]) {
        echo "dangerous";
    } else {
        echo "safe";
    }
} else {
    echo "dangerous";
}
