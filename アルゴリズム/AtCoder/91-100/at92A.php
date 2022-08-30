<?php
while ($num = trim(fgets(STDIN))) {
    $array[] = explode(' ', $num);
}
$array = array_reduce($array, 'array_merge', array());
$trainMinAmount = min($array[0], $array[1]);
$busMinAmount = min($array[2], $array[3]);
echo $trainMinAmount + $busMinAmount;
