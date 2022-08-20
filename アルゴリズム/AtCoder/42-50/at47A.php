<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);

sort($stdinArray);
$comparison = $stdinArray[0] + $stdinArray[1];
$comparison2 = $stdinArray[0] + $stdinArray[2];
$comparison3 = $stdinArray[1] + $stdinArray[2];

if ($comparison == $stdinArray[2] or $comparison2 == $stdinArray[1] or $comparison3 == $stdinArray[0]) {
    echo "Yes";
} else {
    echo "No";
}
