<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$comp = $stdinArray[0] * $stdinArray[1];

if ($comp % 2 == 0) {
    echo "No";
} else {
    echo "Yes";
}
