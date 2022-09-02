<?php
//標準入力
$stdin = trim(fgets(STDIN));
$stdinArray = explode(' ', $stdin);

/*Aが食べれるケーキの最大枚数（８切れ）以下に収まり、かつ、Bが食べれるケーキの最大枚数（８切れ）以下に収まる場合、Yay!と出力。
そうでないなら:(と出力*/
if ($stdinArray[0] <= 8 and $stdinArray[1] <= 8) {
    echo "Yay!";
} else {
    echo ":(";
}
