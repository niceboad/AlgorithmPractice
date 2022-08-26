<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
if ($stdinArray[0] == $stdinArray[1]) {
    echo $stdinArray[2];
} elseif ($stdinArray[0] == $stdinArray[2]) {
    echo $stdinArray[1];
} else {
    echo $stdinArray[0];
}
