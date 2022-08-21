<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$ans = $stdinArray[1] . $stdinArray[2];
if ($ans % 4 == 0) {
    echo "YES";
} else {
    echo "NO";
}
