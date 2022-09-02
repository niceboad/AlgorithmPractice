<?php
//標準入力
$N = trim(fgets(STDIN));
//Nが1,000未満ならABCと出力、1000以上ならABDと出力
if ($N < 1000) {
    echo "ABC";
} else {
    echo "ABD";
}
