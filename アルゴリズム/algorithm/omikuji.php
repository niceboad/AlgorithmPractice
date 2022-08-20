<?php
$result = ["大吉", "中吉", "小吉", "吉", "凶"];
echo "おみくじを引きます", PHP_EOL;
$i = random_int(0, 4);
$result = $result[$i];
switch ($result) {
    case "大吉":
        echo "大吉：サイコー！", PHP_EOL;
        break;
    case "中吉":
        echo "中吉：いいね！", PHP_EOL;
        break;
    case "小吉":
        echo "小吉：なかなかいいね！", PHP_EOL;
        break;
    case "吉":
        echo "吉：まあまあだね！", PHP_EOL;
        break;
    default:
        echo "凶：頑張れ！", PHP_EOL;
        break;
}
