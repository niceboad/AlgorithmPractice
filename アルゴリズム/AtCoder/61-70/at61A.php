<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);

if ($stdinArray[2] >= $stdinArray[0] and $stdinArray[2] <= $stdinArray[1]) {
    echo "Yes";
} else {
    echo "No";
}
