<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$comparison1 = $stdinArray[0] * $stdinArray[1];
$comparison2 = $stdinArray[2] * $stdinArray[3];
if ($comparison1 >= $comparison2) {
    echo $comparison1;
} else {
    echo $comparison2;
}
