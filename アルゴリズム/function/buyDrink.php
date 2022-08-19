<?php
function buyDrink($product, $price)
{
    echo "お金を投入して下さい", PHP_EOL;
    $money = trim(fgets(STDIN)); //投入金額
    $totalAmount = 0; //投入金額合計
    $change = 0; // おつり



    if ($money == 10000 or $money == 5000 or $money == 2000 or $money == 1000 or $money == 500 or $money == 100 or $money == 50 or $money == 10) {
        $totalAmount += $money;
    } else {
        echo "この硬貨は使えません", PHP_EOL;
    }


    echo "${product}の値段は${price}円です", PHP_EOL;

    if ($price < $totalAmount) {
        $change = $totalAmount - $price;
        echo "おつりは${change}円です", PHP_EOL;
        echo "ありがとうございました。", PHP_EOL;
    } elseif ($price == $totalAmount) {
        echo "おつりはありません", PHP_EOL;
        echo "ありがとうございました。", PHP_EOL;
    } else {
        echo "お金が足りません", PHP_EOL;
    }
}

buyDrink("オレンジジュース", 100);
buyDrink("サイダー", 120);
