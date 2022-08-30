<?php
$S = trim(fgets(STDIN));
if ($S[0] == "a" and $S[1] == "b" and $S[2] == "c") {
    echo "Yes";
} elseif ($S[0] == "a" and $S[1] == "c" and $S[2] == "b") {
    echo "Yes";
} elseif ($S[0] == "b" and $S[1] == "a" and $S[2] == "c") {
    echo "Yes";
} elseif ($S[0] == "b" and $S[1] == "c" and $S[2] == "a") {
    echo "Yes";
} elseif ($S[0] == "c" and $S[1] == "a" and $S[2] == "b") {
    echo "Yes";
} elseif ($S[0] == "c" and $S[1] == "b" and $S[2] == "a") {
    echo "Yes";
} else {
    echo "No";
}
