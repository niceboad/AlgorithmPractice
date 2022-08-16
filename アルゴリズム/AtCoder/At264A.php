<?php
$stdin = trim(fgets(STDIN));
$stdin_array = explode(' ', $stdin);
$ans = substr("atcoder", $stdin_array[0] - 1, $stdin_array[1] - $stdin_array[0] + 1);
echo $ans;
