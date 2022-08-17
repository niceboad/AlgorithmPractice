<?php
function readBook($bookName, $totalPageNumber, $readPageNumber)
{
    $isOpenBook = 0; // 0なら本を閉じている。1なら本を開いている。
    $isOpenBook += 1;
    echo "${bookName}は、合計${totalPageNumber}ページあります。";
    echo PHP_EOL;
    if ($isOpenBook == 1) {
        $remainingPageNumber = $totalPageNumber - $readPageNumber; //残りページ数
        echo "${readPageNumber}ページ読みました。";
        echo PHP_EOL;
        echo "残り${remainingPageNumber}ページです。";
        echo PHP_EOL;
    }
}
readBook("プログラムの動き方", 500, 100);
readbook("プログラムの動き方", 500, 200);
