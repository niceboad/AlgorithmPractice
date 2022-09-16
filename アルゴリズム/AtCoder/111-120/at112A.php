<?php
while ($num = trim(fgets(STDIN))) {
    $array[] = explode(' ', $num);
}
$array = array_reduce($array, 'array_merge', array());

if ($array[0] == 1) {
    echo "Hello World";
} else {
    echo $array[1] + $array[2];
}
