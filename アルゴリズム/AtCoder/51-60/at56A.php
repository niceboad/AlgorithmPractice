<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
if ($stdinArray[0] == $stdinArray[1]) {
    echo "H";
} else {
    echo "D";
}
