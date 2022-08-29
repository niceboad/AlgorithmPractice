<?php
$N = trim(fgets(STDIN));
$A = trim(fgets(STDIN)); //1円玉の持っている枚数
$fiveHundredYenAmount = 500;
$fiveHundredYenNumber = floor($N / $fiveHundredYenAmount); //使用できる500円玉の最大枚数を算出
$remainingAmount = $N - ($fiveHundredYenAmount * $fiveHundredYenNumber); //残り金額(500円玉使用後)

if ($A >= $remainingAmount) {
    echo "Yes";
} else {
    echo "No";
}
