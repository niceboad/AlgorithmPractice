<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
if ($stdinArray[0] < $stdinArray[1]) {
    echo ($stdinArray[0] - 1) * ($stdinArray[1] - 1);
} elseif ($stdinArray[0] == $stdinArray[1]) {
    echo ($stdinArray[0] - 1) * ($stdinArray[1] - 1);
} else {
    echo ($stdinArray[0] - 1) * ($stdinArray[1] - 1);
}
