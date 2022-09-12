<?php
$n = trim(fgets(STDIN));
$ans = 0;

for ($i = 0; $i < 3; $i++) {
    if ($n[$i] == 1) {
        $ans = str_replace(1, 9, $n[$i]);
        echo $ans;
    } else {
        $ans = str_replace(9, 1, $n[$i]);
        echo $ans;
    }
}
