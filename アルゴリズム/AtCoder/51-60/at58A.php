<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$comparison1 = $stdinArray[1] - $stdinArray[0];
$comparison2 = $stdinArray[2] - $stdinArray[1];
if ($comparison1 == $comparison2) {
    echo "YES";
} else {
    echo "NO";
}
