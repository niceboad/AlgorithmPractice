<?php
//標準入力
$S = trim(fgets(STDIN));

//$Sの文字の長さを求める（ループに使う）。
$Slen = strlen($S);
//高橋君の思い浮かべている数字（初期値）
$ans = 0;
//$s[$i]が+ならば、ansを+1し、$s[$i]が-ならば、ansを-1し、($Slen-1)回ループを回す。
for ($i = 0; $i <= $Slen - 1; $i++) {
    if ($S[$i] == "+") {
        $ans = $ans + 1;
    } else {
        $ans = $ans - 1;
    }
}
//最終結果を出力
echo $ans;
