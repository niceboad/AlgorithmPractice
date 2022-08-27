<?php
$X = trim(fgets(STDIN));
$fiveHundredCount = 0; //500円玉の枚数
$fiveCount = 0; //5円玉の枚数
$num = $X; //一時的に計算する場所
$ans = 0; //解答
if ($X >= 500) {
    $fiveHundredCount = floor($num / 500); //500円玉の枚数を求める
    $num = $num - (500 * $fiveHundredCount);/*標準入力の数値から500円の枚数分を引き、
                                              残りの金額を出す(500円玉を最大枚数分使う)。*/
    $fiveCount = floor($num / 5); //5円玉の枚数を求める
    $ans = ($fiveHundredCount * 1000) + ($fiveCount * 5); // 嬉しさを両替する
    echo $ans;
} elseif ($X == 0) {
    echo 0;
} else {
    $fiveCount = floor($num / 5); //5円玉の枚数を求める
    $ans = $fiveCount * 5; //嬉しさを両替する。
    echo $ans;
}
