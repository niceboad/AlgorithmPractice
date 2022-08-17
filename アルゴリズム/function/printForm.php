<?php
function printForm($printingNumber, $size)
{
    echo "印刷用紙がセットされました。印刷のサイズを決めてください。";
    echo PHP_EOL;
    echo "印刷のサイズはA4ですね？";
    echo PHP_EOL;
    if ($size == "A4") {
        echo "印刷ボタンが押されました。印刷中です。しばらくお待ちください。";
        echo PHP_EOL;
        echo "${printingNumber}枚が印刷されました。";
        echo PHP_EOL;
    } else {
        echo "セットされた印刷用紙と印刷のサイズが違います。";
    }
}
printForm(30, "A4");
printForm(100, "B5");
