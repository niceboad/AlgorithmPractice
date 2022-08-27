<?php
$stdin = trim(fgets(STDIN));
if ($stdin[0] == 1 and $stdin[1] == 1 and $stdin[2] == 1) {
    echo 3;
} elseif ($stdin[0] == 1 and $stdin[2] == 1) {
    echo 2;
} elseif ($stdin[0] == 1 and $stdin[1] == 1) {
    echo 2;
} elseif ($stdin[1] == 1 and $stdin[2] == 1) {
    echo 2;
} elseif ($stdin[0] == 1 or $stdin[1] == 1 or $stdin[2] == 1) {
    echo 1;
} else {
    echo 0;
}
