<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$B = $stdinArray[2];
$AN = $stdinArray[0] * $stdinArray[1];
if ($AN <= $B) {
    echo $AN;
} else {
    echo $B;
}
