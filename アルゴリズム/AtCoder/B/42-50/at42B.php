<?php
$stdin = trim((fgets(STDIN)));
$stdinArray = explode(' ', $stdin);
while ($num = trim(fgets(STDIN))) {
    $array[] = explode(" ", $num);
}
$array = array_reduce($array, 'array_merge', array());
sort($array);
foreach ($array as $arrays) {
    echo $arrays;
}
