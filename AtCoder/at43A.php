<?php
$N = fgets(STDIN);
$ans = 0;
$count = 1;
for ($i = 1; $i <= $N; $i++) {
    $ans = $ans + $count;
    $count += 1;
}
echo $ans;
