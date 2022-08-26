<?php
while ($num = trim(fgets(STDIN))) {
    $array[] = explode(" ", $num);
}
$array = array_reduce($array, 'array_merge', array());
if ($array[0][0] == $array[1][2] and $array[0][1] == $array[1][1] and $array[0][2] == $array[1][0]) {
    echo "YES";
} else {
    echo "NO";
}
