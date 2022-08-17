<?php
function makeBlackCoffee()
{

    $coffee = 0; //0ならコーヒーが入っていない状態
    $sugar = 0; //0なら砂糖は入っていない状態。
    $hotWater = 0; //0ならお湯が入っていない状態

    echo "コーヒーを作ります。";
    echo PHP_EOL;
    $coffee += 1; //コーヒーを入れる

    if ($coffee == 1) {
        $sugar += 1; //コーヒーが入っている場合のみ砂糖、お湯を入れる。
        $hotWater += 1;
    }
    echo "コーヒーができました";
}

makeBlackCoffee();
