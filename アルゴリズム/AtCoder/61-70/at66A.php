<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$total1 = $stdinArray[0] + $stdinArray[1]; //a + b
$total2 = $stdinArray[0] + $stdinArray[2]; //a + c
$total3 = $stdinArray[1] + $stdinArray[2]; //b + c

echo min($total1, $total2, $total3);
