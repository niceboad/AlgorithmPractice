<?php
$N = trim(fgets(STDIN));
while ($num = trim(fgets(STDIN))) {
    $array[] = explode(' ', $num);
}

$array = array_reduce($array, 'array_merge', array()); //配列を分割
$ans = "APPROVED";

foreach ($array as $arrays) {

    if ($arrays % 2 != 0) {
        continue;
    }

    if ($arrays % 3 != 0 and $arrays % 5 != 0) {
        $ans = "DENIED";
        break;
    }
}
echo $ans;
