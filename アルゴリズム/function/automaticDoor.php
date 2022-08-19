<?php
function automaticDoor()
{
    $openOrCloseDoor = 0; //0ならドアが閉まっている状態。1ならドアが開いている状態。
    $openOrCloseDoor += 1;
    if ($openOrCloseDoor == 1) {
        echo "開くボタンが押されました。", PHP_EOL;
        echo "ドアが開きました。", PHP_EOL;
    }
    $openOrCloseDoor -= 1;

    if ($openOrCloseDoor == 0) {
        echo "ドアが閉まります。", PHP_EOL;
        echo "ドアが閉まりました。", PHP_EOL;
    }
}
automaticDoor();
