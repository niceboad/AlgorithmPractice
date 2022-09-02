<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$abDistance = abs($stdinArray[1] - $stdinArray[0]);
$acDistance = abs($stdinArray[2] - $stdinArray[0]);
$bcDistance = abs($stdinArray[2] - $stdinArray[1]);

if ($abDistance <= $stdinArray[3] and $bcDistance <= $stdinArray[3]) {
    echo "Yes";
} elseif ($acDistance <= $stdinArray[3]) {
    echo "Yes";
} else {
    echo "No";
}
