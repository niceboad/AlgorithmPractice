<?php
$stdin = trim(fgets(STDIN));
$stdin_array = explode(' ', $stdin);
$stdin_array = array_unique($stdin_array);
$ans = count($stdin_array);
echo $ans;
