<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$remainder = $stdinArray[0] % $stdinArray[1]; //余り
if ($remainder == 0) {
    echo 0;
} else {
    echo 1;
}
