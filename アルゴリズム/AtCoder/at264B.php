<?php
[$r, $c] = explode(" ", trim(fgets(STDIN)));
$ans = [
    ["bbbbbbbbbbbbbbb"],
    ["bwwwwwwwwwwwwwb"],
    ["bwbbbbbbbbbbbwb"],
    ["bwbwwwwwwwwwbwb"],
    ["bwbwbbbbbbbwbwb"],
    ["bwbwbwwwwwbwbwb"],
    ["bwbwbwbbbwbwbwb"],
    ["bwbwbwbwbwbwbwb"],
    ["bwbwbwbbbwbwbwb"],
    ["bwbwbwwwwwbwbwb"],
    ["bwbwbbbbbbbwbwb"],
    ["bwbwwwwwwwwwbwb"],
    ["bwbbbbbbbbbbbwb"],
    ["bwwwwwwwwwwwwwb"],
    ["bbbbbbbbbbbbbbb"],

];

if ($ans[$r - 1][0][$c - 1] == "b") {
    echo "black";
} else {
    echo "white";
}
