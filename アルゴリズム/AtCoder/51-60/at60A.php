<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);

if ($stdinArray[0][-1] == $stdinArray[1][0] and $stdinArray[1][-1] == $stdinArray[2][0]) {
    echo "YES";
} else {
    echo "NO";
}
