<?php
$N = trim(fgets(STDIN));
if ($N[0] == $N[1] and $N[1] == $N[2]) {
    echo "Yes";
} elseif ($N[1] == $N[2] and $N[2] == $N[3]) {
    echo "Yes";
} else {
    echo "No";
}
