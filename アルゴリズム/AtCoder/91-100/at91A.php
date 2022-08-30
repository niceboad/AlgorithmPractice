<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$amount = $stdinArray[0] + $stdinArray[1];
$toy = $stdinArray[2];

if ($amount >= $toy) {
    echo "Yes";
} else {
    echo "No";
}
