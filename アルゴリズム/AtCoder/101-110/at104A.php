<?php
//標準入力
$R  = trim(fgets(STDIN));
//1200未満ならABC、1200以上2800未満ならARC、それ以外はAGC
if ($R < 1200) {
    echo "ABC";
} elseif ($R < 2800) {
    echo "ARC";
} else {
    echo "AGC";
}
