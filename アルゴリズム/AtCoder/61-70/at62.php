<?php
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);

if ($stdinArray[0] == '2' and $stdinArray[1] == '2') {
    echo "Yes";
} elseif ($stdinArray[0] == '4' and $stdinArray[1] == '4' or $stdinArray[0] == '4' and $stdinArray[1] == '6' or $stdinArray[0] == '4' and $stdinArray[1] == '9' or $stdinArray[0] == '4' and $stdinArray[1] == '11') {
    echo "Yes";
} elseif ($stdinArray[0] == '6' and $stdinArray[1] == '9' or $stdinArray[0] == '6' and $stdinArray[1] == '11') {
    echo "Yes";
} elseif ($stdinArray[0] == '9' and $stdinArray[1] == '11') {
    echo "Yes";
} elseif ($stdinArray[0] == '1' and $stdinArray[1] == '3' or $stdinArray[0] == '1' and $stdinArray[1] == '5' or $stdinArray[0] == '1' and $stdinArray[1] == '7' or $stdinArray[0] == '1' and $stdinArray[1] == '8' or $stdinArray[0] == '1' and $stdinArray[1] == '10' or $stdinArray[0] == '1' and $stdinArray[1] == '12') {
    echo "Yes";
} elseif ($stdinArray[0] == '3' and $stdinArray[1] == '1' or $stdinArray[0] == '5' and $stdinArray[1] == '1' or $stdinArray[0] == '7' and $stdinArray[1] == '1' or $stdinArray[0] == '8' and $stdinArray[1] == '1' or $stdinArray[0] == '10' and $stdinArray[1] == '1' or $stdinArray[0] == '12' and $stdinArray[1] == '12') {
    echo "Yes";
} elseif ($stdinArray[0] == '5' and $stdinArray[1] == '7' or $stdinArray[0] == '5' and $stdinArray[1] == '8' or $stdinArray[0] == '5' and $stdinArray[1] == '10' or $stdinArray[0] == '5' and $stdinArray[1] == '12') {
    echo "Yes";
} elseif ($stdinArray[0] == '7' and $stdinArray[1] == '8' or $stdinArray[0] == '7' and $stdinArray[1] == '10' or $stdinArray[0] == '7' and $stdinArray[1] == '12') {
    echo "Yes";
} elseif ($stdinArray[0] == '8' and $stdinArray[1] == '10' or $stdinArray[0] == '8' and $stdinArray[1] == '12') {
    echo "Yes";
} elseif ($stdinArray[0] == '10' and $stdinArray[1] == '12') {
    echo "Yes";
} else {
    echo "No";
}
