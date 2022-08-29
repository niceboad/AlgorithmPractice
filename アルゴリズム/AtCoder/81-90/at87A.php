<?php
$X = trim(fgets(STDIN)); //最初に持っている金額
while ($num = trim(fgets(STDIN))) {
    $array[] = explode(" ", $num);
}
$array = array_reduce($array, 'array_merge', array()); //配列の数を減らす。
$subtraction = $X - $array[0]; //最初の金額から、ケーキを買った分を引いた残りの金額
$maxBuyDonut = floor($subtraction / $array[1]); //最大で買えるドーナツの個数
$ans = $X - $array[0] - ($array[1] * $maxBuyDonut); //ケーキとドーナツを買った分を引いた残っている金額
echo $ans;
