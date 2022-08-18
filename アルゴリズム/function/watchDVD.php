<?PHP
function watchDVD($time)
{
    $isDVD = true; // trueならDVDがセットされている。 falseならDVDはセットされていない。
    $remainingTime = $time; // DVDの残り時間
    $elapsedTime = 0; //経過時間;

    echo "DVDをセットして下さい。", PHP_EOL;

    if ($isDVD = true) {
        echo "DVDがセットされました。", PHP_EOL;
    }
    echo "視聴ボタンが押されました。", PHP_EOL;
    for ($i = 0; $i <= $time; $i++) {
        $elapsedTime = 1;
        $remainingTime = $time - $elapsedTime;
        if ($remainingTime == 0) {
            echo "DVDが終わりました。", PHP_EOL;
        }
    }
    $isDVD = false;
    if ($isDVD == false) {
        echo "DVDが取り出されました。", PHP_EOL;
    }
}

watchDVD(120);
watchDVD(35);
