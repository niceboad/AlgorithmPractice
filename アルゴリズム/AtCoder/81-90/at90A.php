<?php
while ($charcters = trim(fgets(STDIN))) {
    $array[] = explode(' ', $charcters);
}
$array = array_reduce($array, 'array_merge', array()); //配列の数を減らす
$ans = $array[0][0] . $array[1][1] . $array[2][2]; //左上、真ん中、右下の文字を抽出
echo $ans;
