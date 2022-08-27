<?php
$replace = "";
$s = trim(fgets(STDIN));
for ($i = 0; $i < strlen($s); $i++) {
    if ($s[$i] == "B") {
        $replace = substr($replace, 0, strlen($replace) - 1);
    } else {
        $replace = $replace . $s[$i];
    }
}
echo $replace;
