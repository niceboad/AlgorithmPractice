<?php
$stdin = trim(fgets(STDIN));
$stdin_array = explode(' ', $stdin);
sort($stdin_array);
if ($stdin_array[0] == 5 and $stdin_array[1] == 5) {
    echo "YES";
} elseif ($stdin_array[1] == 5 and $stdin_array[2] == 5) {
    echo "YES";
} else {
    echo "NO";
}
