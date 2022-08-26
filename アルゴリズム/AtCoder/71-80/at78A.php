<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);
$hex1 = hexdec($stdinArray[0]);
$hex2 = hexdec($stdinArray[1]);
if ($hex1 > $hex2) {
    echo ">";
} elseif ($hex1 == $hex2) {
    echo "=";
} else {
    echo "<";
}
