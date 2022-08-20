<?php
$N = trim(fgets(STDIN));
$discountPrice = 0; //割引金額
$Comparison = floor($N / 15); //15食を何回食べたのか判定。
$price = 800; //値段
if ($Comparison >= 1 and $Comparison <= 6) {
    $discountPrice = 200 * $Comparison;
}
echo ($price * $N) - $discountPrice;
