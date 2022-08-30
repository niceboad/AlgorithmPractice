<?php
$S = trim(fgets(STDIN));
$count = strlen($S); //文字の長さをカウント
$xCount = "x"; //xの数をカウント

for ($i = 0; $i < $count - 1; $i++) {

    $xCount = $xCount . "x"; //文字数分xを増やす。
}

echo $xCount;
