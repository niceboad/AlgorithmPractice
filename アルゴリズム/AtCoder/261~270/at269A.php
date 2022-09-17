<?php
$stdin = trim(fgets(STDIN));
$stdin_array = explode(' ', $stdin);
$ans = ($stdin_array[0] + $stdin_array[1]) * ($stdin_array[2] - $stdin_array[3]);
echo $ans, PHP_EOL;
echo "Takahashi";
