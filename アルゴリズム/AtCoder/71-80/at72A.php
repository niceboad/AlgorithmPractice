<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);

if ($stdinArray[0] > $stdinArray[1]) {
    echo $stdinArray[0] - $stdinArray[1];
} else {
    echo "0";
}
