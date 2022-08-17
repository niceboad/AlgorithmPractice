<?php
function calcConsumptionTax($price)
{
    $tax = 1.1; //消費税10%;
    $includingTax = $price * $tax; //消費税計算
    echo "消費税込みで、${includingTax}円です。";
    echo PHP_EOL;
}
calcConsumptionTax(1000); //商品価格が1000円の場合
calcConsumptionTax(500);//商品価格が500円の場合
