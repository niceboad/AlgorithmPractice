<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$total = $stdinArray[0] + $stdinArray[1]; //A + B

if ($total % 3 == 0) {
    echo "Possible";
} elseif ($stdinArray[0] % 3 == 0) {
    echo "Possible";
} elseif ($stdinArray[1] % 3 == 0) {
    echo "Possible";
} else {
    echo "Impossible";
}
