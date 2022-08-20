<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);


if ($stdinArray[1] == "+") {
    echo $stdinArray[0] + $stdinArray[2];
} else {
    echo $stdinArray[0] - $stdinArray[2];
}
