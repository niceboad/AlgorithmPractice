<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
if ($stdinArray[0] == $stdinArray[1]) {
    echo "Draw";
} elseif ($stdinArray[0] == 1) {
    echo "Alice";
} elseif ($stdinArray[1] == 1) {
    echo "Bob";
} elseif ($stdinArray[0] > $stdinArray[1]) {
    echo "Alice";
} else {
    echo "Bob";
}
