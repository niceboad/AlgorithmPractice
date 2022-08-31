<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$comp = $stdinArray[0] + $stdinArray[1];
if ($stdinArray[0] <= $stdinArray[2] and $comp >= $stdinArray[2]) {
    echo "YES";
} else {
    echo "NO";
}
