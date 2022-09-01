<?php
$S = trim(fgets(STDIN));
$length = strlen($S);
$count = 0;

for ($i = 0; $i < $length; $i++) {
    if ($S[$i] == "o") {
        $count = $count + 1;
    }
}
$ans = 700 + (100 * $count);
echo $ans;
